<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $inputan['name'] = 'Fitri Maryani';
        $inputan['email'] = 'fitrimaryani329@gmail.com';
        $inputan['password'] = Hash::make('admin1234');//passwordnya admin1234
        $inputan['phone'] = '089519193601';
        $inputan['alamat'] = 'Jl. Nelayan, Segedong';
        $inputan['role'] = 'admin';
        User::create($inputan);
    }
}