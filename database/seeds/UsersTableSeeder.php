<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $email = ['master@bpi.id', 'tk@bpi.id', 'sd@bpi.id', 'smp@bpi.id', 'sma1@bpi.id', 'sma2@bpi.id', 'smk@bpi.id'];
        $name = ['Yayasan BPI', 'TK BPI', 'SD BPI', 'SMP BPI', 'SMA BPI 1', 'SMA BPI 2', 'SMK BPI'];

        for($i = 0; $i < count($email); $i++) $data[] = [
            'name' => $name[$i],
        	'email' => $email[$i],
        	'password' => Hash::make('12345678'),
            'role' => $email[$i] === $email[0] ? 2 : 1,
            'created_at' => now(),
            'updated_at' => now()
        ];
        User::insert($data);
    }
}
