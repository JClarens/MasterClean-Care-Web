<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'role_id' => 1,
                'email' => 'admin@mail.com',
                'avatar' => 'users/default.png',
                'password' => Hash::make('password'),
                'gender' => 1,
                'born_place' => 'Medan',
                'born_date' => Carbon::create('1990', '2', '14'),
                'religion' => 2,
                'race' => 'Jawa',
                'description' => '',
                'status' => 1,
                'activation' => 1,
                'created_at' => new Carbon(),
            ],
            [
                'name' => 'Andi',
                'role_id' => 2,
                'email' => 'andi123@mail.com',
                'avatar' => 'users/profile3.jpg',
                'password' => Hash::make('password'),
                'gender' => 1,
                'born_place' => 'P.Siantar',
                'born_date' => Carbon::create('1980', '1', '1'),
                'religion' => 3,
                'race' => '',
                'description' => '',
                'status' => 1,
                'activation' => 1,
                'created_at' => new Carbon(),
            ],
            [
                'name' => 'Albert',
                'role_id' => 2,
                'email' => 'albert123@mail.com',
                'avatar' => 'users/profile3.jpg',
                'password' => Hash::make('password'),
                'gender' => 1,
                'born_place' => 'Medan',
                'born_date' => Carbon::create('1985', '6', '16'),
                'religion' => 1,
                'race' => 'Jawa',
                'description' => '',
                'status' => 1,
                'activation' => 1,
                'created_at' => new Carbon(),
            ],
            [
                'name' => 'Fahmi Amri',
                'role_id' => 2,
                'email' => 'fahmi123@mail.com',
                'avatar' => 'users/profile3.jpg',
                'password' => Hash::make('password'),
                'gender' => 1,
                'born_place' => 'Medan',
                'born_date' => Carbon::create('1982', '8', '11'),
                'religion' => 5,
                'race' => 'Jawa',
                'description' => '',
                'status' => 1,
                'activation' => 1,
                'created_at' => new Carbon(),
            ],
            [
                'name' => 'Budi',
                'role_id' => 2,
                'email' => 'budi123@mail.com',
                'avatar' => 'users/profile3.jpg',
                'password' => Hash::make('password'),
                'gender' => 1,
                'born_place' => 'Banda Aceh',
                'born_date' => Carbon::create('1989', '9', '9'),
                'religion' => 1,
                'race' => 'Jawa',
                'description' => '',
                'status' => 1,
                'activation' => 1,
                'created_at' => new Carbon(),
            ],
            [
                'name' => 'Ratu Alya',
                'role_id' => 3,
                'email' => 'ratu123@mail.com',
                'avatar' => 'users/profile2.jpg',
                'password' => Hash::make('password'),
                'gender' => 2,
                'born_place' => 'Medan',
                'born_date' => Carbon::create('1987', '9', '26'),
                'religion' => 4,
                'race' => 'Nias',
                'description' => '',
                'status' => 1,
                'activation' => 1,
                'created_at' => new Carbon(),
            ],
            [
                'name' => 'Wahyu Pratama',
                'role_id' => 3,
                'email' => 'wahyu123@mail.com',
                'avatar' => 'users/profile4.jpg',
                'password' => Hash::make('password'),
                'gender' => 1,
                'born_place' => 'Deli Serdang',
                'born_date' => Carbon::create('1980', '1', '12'),
                'religion' => 3,
                'race' => 'Simalungun',
                'description' => '',
                'status' => 1,
                'activation' => 1,
                'created_at' => new Carbon(),
            ],
            [
                'name' => 'Imelda',
                'role_id' => 3,
                'email' => 'Imelda123@mail.com',
                'avatar' => 'users/profile2.jpg',
                'password' => Hash::make('password'),
                'gender' => 2,
                'born_place' => 'Binjai',
                'born_date' => Carbon::create('1990', '5', '22'),
                'religion' => 5,
                'race' => 'Jawa',
                'description' => '',
                'status' => 0,
                'activation' => 1,
                'created_at' => new Carbon(),
            ],
            [
                'name' => 'Sindi Carla',
                'role_id' => 3,
                'email' => 'sindi123@mail.com',
                'avatar' => 'users/profile2.jpg',
                'password' => Hash::make('password'),
                'gender' => 2,
                'born_place' => 'Medan',
                'born_date' => Carbon::create('1988', '8', '8'),
                'religion' => 4,
                'race' => 'Batak',
                'description' => '',
                'status' => 1,
                'activation' => 1,
                'created_at' => new Carbon(),
            ],
            [
                'name' => 'Putri Anisa',
                'role_id' => 3,
                'email' => 'putri123@mail.com',
                'avatar' => 'users/profile2.jpg',
                'password' => Hash::make('password'),
                'gender' => 2,
                'born_place' => 'Tebing Tinggi',
                'born_date' => Carbon::create('1989', '9', '9'),
                'religion' => 1,
                'race' => 'Nias',
                'description' => '',
                'status' => 1,
                'activation' => 1,
                'created_at' => new Carbon(),
            ],
            [
                'name' => 'Sintia Aulia',
                'role_id' => 3,
                'email' => 'sintia123@mail.com',
                'avatar' => 'users/profile2.jpg',
                'password' => Hash::make('password'),
                'gender' => 2,
                'born_place' => 'Tebing Tinggi',
                'born_date' => Carbon::create('1989', '8', '11'),
                'religion' => 1,
                'race' => 'Karo',
                'description' => '',
                'status' => 1,
                'activation' => 1,
                'created_at' => new Carbon(),
            ],
            [
                'name' => 'Indah Purnama Sari',
                'role_id' => 3,
                'email' => 'indah123@mail.com',
                'avatar' => 'users/profile2.jpg',
                'password' => Hash::make('password'),
                'gender' => 2,
                'born_place' => 'binjai',
                'born_date' => Carbon::create('1989', '9', '12'),
                'religion' => 2,
                'race' => 'Jawa',
                'description' => '',
                'status' => 1,
                'activation' => 1,
                'created_at' => new Carbon(),
            ],
            [
                'name' => 'Aisyah Asih',
                'role_id' => 3,
                'email' => 'evi123@mail.com',
                'avatar' => 'users/profile2.jpg',
                'password' => Hash::make('password'),
                'gender' => 2,
                'born_place' => 'kisaran',
                'born_date' => Carbon::create('1970', '5', '5'),
                'religion' => 1,
                'race' => 'Jawa',
                'description' => '',
                'status' => 1,
                'activation' => 1,
                'created_at' => new Carbon(),
            ],
            [
                'name' => 'Feri Nugroho',
                'role_id' => 3,
                'email' => 'feri123@mail.com',
                'avatar' => 'users/profile4.jpg',
                'password' => Hash::make('password'),
                'gender' => 1,
                'born_place' => 'kisaran',
                'born_date' => Carbon::create('1990', '3', '2'),
                'religion' => 4,
                'race' => 'Jawa',
                'description' => '',
                'status' => 1,
                'activation' => 1,
                'created_at' => new Carbon(),
            ],
            [
                'name' => 'Gina Montana',
                'role_id' => 3,
                'email' => 'gina123@mail.com',
                'avatar' => 'users/profile2.jpg',
                'password' => Hash::make('password'),
                'gender' => 2,
                'born_place' => 'gunung sitoli',
                'born_date' => Carbon::create('1979', '2', '2'),
                'religion' => 2,
                'race' => 'Jawa',
                'description' => '',
                'status' => 1,
                'activation' => 1,
                'created_at' => new Carbon(),
            ],
            [
                'name' => 'Heri Santoso',
                'role_id' => 3,
                'email' => 'heri123@mail.com',
                'avatar' => 'users/profile4.jpg',
                'password' => Hash::make('password'),
                'gender' => 1,
                'born_place' => 'Jakarta',
                'born_date' => Carbon::create('1980', '5', '5'),
                'religion' => 4,
                'race' => 'Jawa',
                'description' => '',
                'status' => 1,
                'activation' => 1,
                'created_at' => new Carbon(),
            ],
            [
                'name' => 'Intan Mirana',
                'role_id' => 3,
                'email' => 'intan123@mail.com',
                'avatar' => 'users/profile2.jpg',
                'password' => Hash::make('password'),
                'gender' => 2,
                'born_place' => 'Medan',
                'born_date' => Carbon::create('1992', '4', '14'),
                'religion' => 3,
                'race' => 'Aceh',
                'description' => '',
                'status' => 1,
                'activation' => 1,
                'created_at' => new Carbon(),
            ],
            [
                'name' => 'Ilham Khalid',
                'role_id' => 3,
                'email' => 'ilham123@mail.com',
                'avatar' => 'users/profile4.jpg',
                'password' => Hash::make('password'),
                'gender' => 1,
                'born_place' => 'demak',
                'born_date' => Carbon::create('1990', '3', '6'),
                'religion' => 3,
                'race' => 'Minangkabau',
                'description' => '',
                'status' => 1,
                'activation' => 1,
                'created_at' => new Carbon(),
            ],
        ]);
    }
}
