<?php

namespace Database\Seeders;

use App\Models\Note;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class NoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    // assume you have 2 users
    $users = User::all();

    foreach ($users as $user) {
        Note::factory()->count(3)->create([
            'user_id' => $user->id,
        ]);
    }
}
}
