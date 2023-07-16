<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
// use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function upload($file, string $name, string $dir, string $oldFile = '')
    {
        $ext = $file->getClientOriginalExtension();

        $fileDir = $dir . str_replace(' ', '_', strtolower($name));
        $newFile = time() . '.' . $ext;

        // set new name
        $fileName = $fileDir . '/' . $newFile;

        //check path is not empty
        if (!empty($fileName) && Storage::exists($oldFile)) {
            Storage::delete($oldFile);
        }


        if (!$file->storeAs("/$fileDir", $newFile)) {
            return ['success' => false, 'message' => 'Unable to upload image'];
        } else {

            return ['success' => true, 'name' => $fileName];
        }
    }

    public function sendMessage($message, $type, $success, $entity = '')
    {
        return [
            'message' => $message,
            'type' => $type,
            'success' => $success,

        ];
    }
}