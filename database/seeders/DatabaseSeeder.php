<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\PaymentType as Payment;

use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Landlord',
            'email' => 'landlord@'.config('app.name').'.com',
            'password' => Hash::make('123456'),
            'role' => 'landlord'
        ]);
    
        foreach(['Rent', 'Expense', 'Security Deposit'] as $type){
            Payment::firstOrCreate(['name'=>$type]);
        }
    }
}
