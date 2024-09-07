<?php

namespace App\Providers;

use Faker\Provider\Base;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Vite;
use Illuminate\Support\ServiceProvider;

class FakerImageProvider extends Base
{
    public function fixturesImage(string $fixturesDir, string $storageDir): string
    {
        if(!Storage::exists($storageDir)){
            Storage::makeDirectory($storageDir);
        }
        $file = $this->generator->file(
            base_path('/tests/Fixtures/images/$storageDir'),
            Storage::path($storageDir),
            false,
        );
        return '/storage/' . trim($storageDir, '/') . '/' . $file;
    }
}
