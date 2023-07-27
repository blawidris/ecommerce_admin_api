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

    public function upload($file, string $name, string $dir, string $oldFile = ''): string
    {
        $ext = $file->getClientOriginalExtension();

        $fileDir = $dir . time();
        $newFile = $this->random_text(10) . '.' . $ext;

        // set new name
        $fileName = $fileDir . '/' . $newFile;

        //check path is not empty
        if (!empty($fileName) && Storage::exists($oldFile)) {
            Storage::delete($oldFile);
        }


        if (!$file->storeAs("/$fileDir", $newFile)) {
            return false;
        }

        return $fileName;
    }

    public function sendMessage(string $message, string $type = 'success', bool $success = true, array $entity = []): array
    {
        return [
            'message' => $message,
            'type' => $type,
            'success' => $success,
            'data' => json_encode($entity)
        ];
    }

    public function random_text($l = 6)
    {
        $charaters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $newChar  = '';
        $length = strlen($charaters);

        for ($i = 0; $i < $l; $i++) {
            $newChar .= $charaters[rand(0, $length - 1)];
        }

        return $newChar;
    }

    public function random_number($l = 6)
    {
        $charaters = '0123456789';
        $newChar  = '';
        $length = strlen($charaters);

        for ($i = 0; $i < $l; $i++) {
            $newChar .= $charaters[rand(0, $length - 1)];
        }

        return $newChar;
    }
}
