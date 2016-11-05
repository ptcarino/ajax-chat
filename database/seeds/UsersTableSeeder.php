<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => 1,
            'name' => 'Pat Cariño',
            'email' => 'admin@email.com',
            'password' => '$2y$10$oTEKsMwRZ2O45sS12IeJ9.5Z.WroYmr9MVXrMfVNEXrXVRgiyHcle',
            'remember_token' => 'QM8CdxFq5E3Jpd4qC9carDmxI65nARRNj0vDxmJuEUznFIEW54Ib3L6ysZuj',
            'created_at' => '2016-11-04 15:42:42',
            'updated_at' => '2016-11-04 15:42:42'
        ]);

        DB::table('users')->insert([
            'id' => 2,
            'name' => 'John Doe',
            'email' => 'johndoe@email.com',
            'password' => '$2y$10$QDjQQCYcOFv2mR46PHDyKuU7kYVboP4XwkZp6mwRERKEGZ/qNKjgO',
            'remember_token' => 'XYdHuDoXY4Bq4Ksi1gryrdLyHDNu2ioi3Ze8ZEIY7wjp45bPeqHBwpTc0j1f',
            'created_at' => '2016-11-04 15:42:43',
            'updated_at' => '2016-11-04 15:42:43'
        ]);
    }
}
