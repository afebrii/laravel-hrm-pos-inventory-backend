<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //create a company
        \App\Models\Company::create([
            'name' => 'JagoFlutter',
            'email' => 'bahri@jagoflutter.com',
            'logo' => 'https://jagoflutter.com/logo',
            'website' => 'https://jagoflutter.com',
            'phone' => '082216796892',
            'address' => 'JL. Jago Flutter no 04',
            'status'  => 'active',
            'total_users' => '10',
            'clock_in_time' => '09:00:00',
            'clock_out_time' => '18:00:00',
            'early_clock_in_time' => '15',
            'allow_clock_out_till' => '15',
            'self_clocking' => 1,
        ]);
    }
}
