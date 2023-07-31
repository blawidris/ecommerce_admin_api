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

    function calculateReadingTime($content, $wordsPerMinute = 200)
    {
        // Calculate the number of words in the content
        $wordCount = str_word_count(strip_tags($content));

        // Calculate the estimated reading time in minutes
        $readingTime = ceil($wordCount / $wordsPerMinute);

        return $readingTime;
    }


    public function formatNumberToK($number){

        if ($number >= 1000) {
            $formattedNumber = number_format($number / 1000, 1);
            return str_pad($formattedNumber, 3, '0', STR_PAD_RIGHT) . 'k';
        }

        return $number;
    }

}