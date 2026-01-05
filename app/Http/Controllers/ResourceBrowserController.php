<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ResourceBrowserController extends Controller
{
    public function index()
    {
        $path = resource_path('views'); // resources/

        $folders = File::directories($path);
        $data = [];
        $fileNames = [];
        foreach ($folders as $folder) {

            $folderName = basename($folder);
            //$data[$folderName] =
            $files  = File::files($folder);
            foreach ($files as $file) {
                // Only filename without .blade.php
                $data[$folderName][] = $file->getBasename('.blade.php');
            }
        }
        echo '<pre>';
        print_r($data);
        echo '</pre>';
        dd();
        //return view('resource-browser.index', compact('data'));
    }
}
