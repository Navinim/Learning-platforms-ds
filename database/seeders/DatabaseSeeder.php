<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Durshikya',
            'email' => 'info@durshikshya.com',
            'user_type' => 'ADM',
            'password' => Hash::make('p@ssw0rd')
        ]);
    //     CompanyProfile::create([
    //         'company_name' => 'TrailMaker Education Consultancy Pvt. Ltd.',
    //     ]);
    }
}
