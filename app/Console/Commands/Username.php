<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class UserName extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'username';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Display an inspiring quote';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //$this->comment(PHP_EOL.Inspiring::quote().PHP_EOL);
        //$this->line(PHP_EOL.Inspiring::quote().PHP_EOL);
        $this->info(PHP_EOL."username".PHP_EOL);
        //$this->question (PHP_EOL.Inspiring::quote().PHP_EOL);
        //$this->error (PHP_EOL.Inspiring::quote().PHP_EOL);
    }
}
