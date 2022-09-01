<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Login;

class LoginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //insert01
        $login = new Login();
        $login->email = 'first@gmail.com';
        $login->password = 'casalonge0930';
        $login->save();

        //insert02
        Login::create([
            'email' => 'second@hotmail.com',
            'password' => 'user03235300'
        ]);
    }
}
