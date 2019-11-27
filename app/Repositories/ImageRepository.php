<?php

namespace App\Repositories;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManager;
use Intervention\Image\Facades\Image as Image;

class ImageRepository
{
    public function upload($uploadFile, $folder, $DimentionX, $DimentionY)
    {
        $photo = $uploadFile; 
		
		$data = getimagesize($photo);
		$width = $data[0];
		$height = $data[1];

        $originalName = $photo->getClientOriginalName();
        $extension = $photo->getClientOriginalExtension();
        $originalNameWithoutExt = substr($originalName, 0, strlen($originalName) - strlen($extension) - 1);

        $filename = $this->sanitize($originalNameWithoutExt);
        $allowed_filename = $this->createUniqueFilename($filename, $extension, $folder);

       	$uploadSuccess1 = $this->original($photo, $allowed_filename, $folder, $DimentionX, $DimentionY);
        return $allowed_filename;

    }
	

    public function createUniqueFilename($filename, $extension, $folder)
    {
		
		$full_size_dir = public_path($folder);
        $full_image_path = $full_size_dir . $filename . '.' . $extension;

        if ( File::exists( $full_image_path ) )
        {
            // Generate token for image
            $imageToken = substr(sha1(mt_rand()), 0, 5);
            return $filename . '-' . $imageToken . '.' . $extension;
        }

        return $filename . '.' . $extension;
    }
	
	
    /**
     * Optimize Original Image
     */
    public function original($photo, $filename, $folder, $DimentionX, $DimentionY)
    {
        $manager = new ImageManager();
		$full_size_dir = public_path($folder);
        $image = $manager->make( $photo )->resize($DimentionX, $DimentionY, function ($constraint) {
		$constraint->aspectRatio();
		});
		
		$canvas = Image::canvas($DimentionX, $DimentionY);
		$canvas->insert($image, 'center');
		$canvas->save($full_size_dir . $filename );

        return $image;
    }

    /**
     * Delete Image From Session folder, based on original filename
     */
    public function delete($fileName, $folder)
    {

        $full_size_dir = public_path($folder);

        $full_path1 = $full_size_dir . $fileName;

        if ( File::exists( $full_path1 ) )
        {
            File::delete( $full_path1 );
        }

        return 1;
    }

    function sanitize($string, $force_lowercase = true, $anal = false)
    {
        $strip = array("~", "`", "!", "@", "#", "$", "%", "^", "&", "*", "(", ")", "_", "=", "+", "[", "{", "]",
            "}", "\\", "|", ";", ":", "\"", "'", "&#8216;", "&#8217;", "&#8220;", "&#8221;", "&#8211;", "&#8212;",
            "â€”", "â€“", ",", "<", ".", ">", "/", "?");
        $clean = trim(str_replace($strip, "", strip_tags($string)));
        $clean = preg_replace('/\s+/', "-", $clean);
        $clean = ($anal) ? preg_replace("/[^a-zA-Z0-9]/", "", $clean) : $clean ;

        return ($force_lowercase) ? (function_exists('mb_strtolower')) ? mb_strtolower($clean, 'UTF-8') : strtolower($clean) : $clean;
    }
}