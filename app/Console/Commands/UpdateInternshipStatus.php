<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\ProgramMagang;
use Illuminate\Support\Facades\Log;

class UpdateInternshipStatus extends Command
{

    protected $signature = 'internships:update-status';


    protected $description = 'Updates the status of expired internships from "buka" to "tutup"';


    public function handle()
    {
        $this->info('Mulai memeriksa lowongan magang yang kadaluwarsa...');
        $expiredCount = ProgramMagang::where('status', 'buka')
                                     ->where('akhir_magang', '<', now())
                                     ->update(['status' => 'tutup']);

        if ($expiredCount > 0) {
            $this->info("Berhasil! {$expiredCount} lowongan telah diupdate statusnya menjadi 'tutup'.");
            Log::info("Scheduler berhasil mengupdate {$expiredCount} lowongan menjadi 'tutup'.");
        } else {
            $this->info('Tidak ada lowongan yang perlu diupdate.');
        }

        return 0;
    }
}
