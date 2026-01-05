<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use App\Models\ViewFile;

class ScanViews extends Command
{
        protected $signature = 'scan:views';
        protected $description = 'Scan resources/views folder and save file names into database';

        public function handle()
        {
            $path = resource_path('views');

            $files = File::allFiles($path);

            foreach ($files as $file) {
            $relative = str_replace($path.'/', '', $file->getPathname());

            ViewFile::updateOrCreate(
            ['path' => $relative],
            [
            'folder' => dirname($relative),
            'filename' => $file->getFilename(),
            ]
            );
            }

            $this->info('Views scanned and saved successfully.');
        }
}
