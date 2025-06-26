<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;

class DeleteAllUsers extends Command
{
    protected $signature = 'users:truncate'; // ✅ Command you will run

    protected $description = 'Delete all user accounts from the database';

    public function handle()
    {
        User::truncate();
        $this->info('✅ All users have been deleted.');
    }
}
