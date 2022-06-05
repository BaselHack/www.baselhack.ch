<?php

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

if (! function_exists('cdn_path')) {
    function cdn_path($file_path)
    {
        try {
            $filesystems_default = config('filesystems.default');

            switch ($filesystems_default) {
        case 's3':
          $protocol = 'https';
          $endpoint = config('filesystems.disks.s3.cdn');
          $root_path = config('filesystems.disks.s3.root');

          return "$protocol://$endpoint/$root_path/$file_path";

        default:
          return Storage::disk(config('filesystems.default'))->url($file_path);
      }
        } catch (Exception $exception) {
            Log::error($exception->getMessage());

            return 'empty';
        }
    }
}
