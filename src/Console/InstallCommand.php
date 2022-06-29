<?php

namespace VendorName\PackageName\Console;

use Illuminate\Console\Command;

class InstallCommand extends Command
{
    protected $signature = ':package_slug:install';

    public $description = 'install :package_slug package functionality';

    public function handle()
    {
        // $this->call('migrate');  // Need to migrate when install
    }
}
