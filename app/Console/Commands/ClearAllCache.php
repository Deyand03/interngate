<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;


class ClearAllCache extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cache:fresh';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clear all application caches at once (cache, config, route, view)';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Artisan::call('cache:clear');
        Artisan::call('config:clear');
        Artisan::call('route:clear');
        Artisan::call('view:clear');

        // Beri pesan sukses di terminal
        $this->info('All caches have been cleared successfully!');

        return 0;
    }
}
