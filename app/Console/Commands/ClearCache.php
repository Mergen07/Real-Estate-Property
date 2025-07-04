<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ClearCache extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->call('optimize:clear');
        $this->call('route:clear');
        $this->call('config:clear');
        $this->call('cache:clear');
        $this->info('Caches cleared: optimize + route + config + cache');

        return Command::SUCCESS;
    }
}
