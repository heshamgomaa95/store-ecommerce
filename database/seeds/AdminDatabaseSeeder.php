<?php

use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'name'=>'Zezo Gomaa',
            'email'=>'heshamzezo49@gmail.com',
            'password'=>bcrypt('12345678'),
        ]);
    }
}
