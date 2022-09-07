<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users_id = User::where('email', 'super@test.com')->orWhere('email', 'admin@test.com')->orWhere('email', 'user@test.com')->get();
        foreach ($users_id as $id) {
            Post::factory(5)->create([
                'user_id' => $id,
            ]);
        }
    }
}
