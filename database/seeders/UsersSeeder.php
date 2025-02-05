<?php
namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'     => 'Admin CP',
            'email'    => 'admin@gmail.com',
            'password' => bcrypt('rahasia'),
        ]);
    }
}
