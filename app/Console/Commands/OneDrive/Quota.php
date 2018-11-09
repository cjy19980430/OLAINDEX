<?php

namespace App\Console\Commands\OneDrive;

use Illuminate\Console\Command;

class Quota extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'od:quota';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'OneDrive Info';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $headers = array_keys(quota());
        $quota[] = quota();
        $this->table($headers, $quota);
    }
}
