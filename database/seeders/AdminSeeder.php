<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    

        DB::table('admins')->insert([
            [
                'name' => 'Idris theCreativePen',
                'email' => 'software@giannacollective.com',
                'password' => Hash::make('_aYoola@23!'),
                'is_super' => true
            ],
            [
                'name' => 'Gianna',
                'email' => 'gianna@giannacollective.com',
                'password' => Hash::make('giannaC0llectives'),
                'is_super' => true
            ]
        ]);
    }
}