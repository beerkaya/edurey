<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Composer;
use Illuminate\Support\Facades\Artisan;

class PrepareProject extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'prepare:project';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Prepare project for serving';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        error_log('Preparing project for serving');

        $this->call('migrate:fresh');

        $this->call('key:generate');

        $this->call('db:seed', ['--class' => 'AuthorSeeder']);

        error_log('Project is ready for serving');

        return Command::SUCCESS;
    }
}
