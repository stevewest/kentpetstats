<?php
/**
 * @copyright  2015 Steve "uru" West
 * @license    MIT
 * @link       https://github.com/stevewest/kentpetstats
 *
 * @author     Steve "uru" West <steven.david.west@gmail.com>
 */

namespace Controller;

use Controller\Base\Controller;
use HttpNotFoundException;
use Image;
use Model\Owner;
use Model\Pet;
use View;

class Pets extends Controller
{

	public function action_index($username)
	{
		$owner = Owner::findOne($username);

		if ( ! $owner)
		{
			throw new HttpNotFoundException;
		}

		$this->title = $owner['_id'];

		if ($owner['vacation'])
		{
			$this->page_title = $this->title . ' <span class="glyphicon glyphicon-plane"></span>';
		}

		$this->template->content = View::forge('pets/index', ['owner' => $owner]);
	}

	public function action_image($id)
	{
		$pet = Pet::find($id);

		if ( ! $pet)
		{
			throw new HttpNotFoundException;
		}

		$pathBase = DOCROOT.'/assets/img/';

		$colour = imagecreatefrompng($pathBase.'colour/'.$pet['colour'].'.png');
		$mouth = imagecreatefrompng($pathBase.'mouth/'.$pet['face']['mouth'].'.png');

		if ($pet['face']['eyes'] == '~')
		{
			$pet['face']['eyes'] = 'tilde';
		}

		$eye = imagecreatefrompng($pathBase.'eye/'.$pet['face']['eyes'].'.png');
		$ear = imagecreatefrompng($pathBase.'ear/'.$pet['face']['ears'].'.png');
		$sound = imagecreatefrompng($pathBase.'sound/'.$pet['sound'].'.png');

		list($width, $height) = getimagesize($pathBase.'colour/'.$pet['colour'].'.png');

		$base = imagecreatetruecolor($width, $height);
		imagealphablending($base, true);
		imagesavealpha($base, true);
		imagefill($base, 0, 0, imagecolorallocatealpha($base, 255, 255, 255, 127));

		imagecopy($base, $colour, 0, 0, 0, 0, $width, $height);
		imagecopy($base, $mouth, 0, 0, 0, 0, $width, $height);
		imagecopy($base, $eye, 0, 0, 0, 0, $width, $height);
		imagecopy($base, $ear, 0, 0, 0, 0, $width, $height);
		imagecopy($base, $sound, 0, 0, 0, 0, $width, $height);

		header('Content-Type: image/png');
		imagepng($base);

		die();
	}

}
