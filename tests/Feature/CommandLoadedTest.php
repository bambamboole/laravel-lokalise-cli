<?php

use Illuminate\Support\Facades\Artisan;

it('loads the laravel lokalise commands', function () {
    expect(array_keys(Artisan::all()))->toContain('lokalise:upload', 'lokalise:download');
});
