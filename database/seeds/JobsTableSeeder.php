<?php

use Illuminate\Database\Seeder;

class JobsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jobs')->insert([
            [
                'job' => 'Asisten Rumah Tangga',
            ],
            [
                'job' => 'Babysitter',
            ],
            [
                'job' => 'Perawat Balita',
            ],
            [
                'job' => 'Perawat Lansia',
            ],
        ]);
    }
}
