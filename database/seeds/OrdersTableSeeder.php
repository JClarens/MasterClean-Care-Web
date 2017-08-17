<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;


class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        DB::table('orders')->insert([
        	[
				'member_id' => 5,
				'art_id' => 11,
				'work_time_id' => 1,
				'job_id' => 1,
				'start_date' => Carbon::create('2017', '6', '19', '9', '0', '0'),
				'end_date' => Carbon::create('2017', '6', '19', '12', '0', '0'),
				'cost' => 250000,
				'remark' => 'Nanti saya rate bintang lima kalau kerjanya rapi',
				'status' => 3,
				'status_member' => 1,
				'status_art' => 1
			],
			[
				'member_id' => 2,
				'art_id' => 15,
				'work_time_id' => 2,
				'job_id' => 2,
				'start_date' => Carbon::create('2017', '6', '20', '8', '0', '0'),
				'end_date' => Carbon::create('2017', '6', '20', '17', '0', '0'),
				'cost' => 150000,
				'remark' => 'Nanti saya kasih bonus kalau kerjanya bagus',
				'status' => 3,
				'status_member' => 1,
				'status_art' => 1
			],
			[
				'member_id' => 2,
				'art_id' => 15,
				'work_time_id' => 2,
				'job_id' => 3,
				'start_date' => Carbon::create('2017', '6', '5', '8', '0', '0'),
				'end_date' => Carbon::create('2017', '6', '5', '17', '0', '0'),
				'cost' => 150000,
				'remark' => '',
				'status' => 3,
				'status_member' => 1,
				'status_art' => 1
			],
			[
				'member_id' => 2,
				'art_id' => 15,
				'work_time_id' => 2,
				'job_id' => 2,
				'start_date' => Carbon::create('2017', '6', '24', '8', '0', '0'),
				'end_date' => Carbon::create('2017', '6', '24', '17', '0', '0'),
				'cost' => 150000,
				'remark' => 'Nanti saya kasih bonus kalau kerjanya bagus',
				'status' => 3,
				'status_member' => 1,
				'status_art' => 1
			],
			[
				'member_id' => 2,
				'art_id' => 15,
				'work_time_id' => 2,
				'job_id' => 2,
				'start_date' => Carbon::create('2017', '6', '7', '8', '0', '0'),
				'end_date' => Carbon::create('2017', '6', '7', '17', '0', '0'),
				'cost' => 150000,
				'remark' => 'Nanti saya kasih bonus kalau kerjanya bagus',
				'status' => 3,
				'status_member' => 1,
				'status_art' => 1
			],
			[
				'member_id' => 3,
				'art_id' => 12,
				'work_time_id' => 3,
				'job_id' => 3,
				'start_date' => Carbon::create('2017', '7', '20', '8', '0', '0'),
				'end_date' => Carbon::create('2017', '8', '19', '17', '0', '0'),
				'cost' => 2000000,
				'remark' => 'Anak saya umur 3Thn',
				'status' => 1,
				'status_member' => 1,
				'status_art' => 1
			],
			[
				'member_id' => 3,
				'art_id' => 13,
				'work_time_id' => 3,
				'job_id' => 3,
				'start_date' => Carbon::create('2017', '7', '20', '8', '0', '0'),
				'end_date' => Carbon::create('2017', '8', '19', '17', '0', '0'),
				'cost' => 1900000,
				'remark' => 'Hari minggu boleh libur',
				'status' => 1,
				'status_member' => 1,
				'status_art' => 1
			],
			[
				'member_id' => 3,
				'art_id' => 13,
				'work_time_id' => 3,
				'job_id' => 3,
				'start_date' => Carbon::create('2017', '8', '20', '8', '0', '0'),
				'end_date' => Carbon::create('2017', '9', '19', '17', '0', '0'),
				'cost' => 1900000,
				'remark' => '',
				'status' => 1,
				'status_member' => 1,
				'status_art' => 1
			],
			[
				'member_id' => 3,
				'art_id' => 12,
				'work_time_id' => 3,
				'job_id' => 3,
				'start_date' => Carbon::create('2017', '6', '20', '8', '0', '0'),
				'end_date' => Carbon::create('2017', '7', '19', '17', '0', '0'),
				'cost' => 2200000,
				'remark' => 'Makan siang saya tanggung',
				'status' => 3,
				'status_member' => 1,
				'status_art' => 1
			],
			[
				'member_id' => 2,
				'art_id' => 15,
				'work_time_id' => 1,
				'job_id' => 2,
				'start_date' => Carbon::create('2017', '8', '25', '8', '0', '0'),
				'end_date' => Carbon::create('2017', '8', '25', '17', '0', '0'),
				'cost' => 150000,
				'remark' => '',
				'status' => 0,
				'status_member' => 0,
				'status_art' => 0
			],
			[
				'member_id' => 2,
				'art_id' => 15,
				'work_time_id' => 1,
				'job_id' => 2,
				'start_date' => Carbon::create('2017', '8', '25', '8', '0', '0'),
				'end_date' => Carbon::create('2017', '8', '25', '17', '0', '0'),
				'cost' => 150000,
				'remark' => '',
				'status' => 1,
				'status_member' => 0,
				'status_art' => 0
			],
			[
				'member_id' => 2,
				'art_id' => 15,
				'work_time_id' => 1,
				'job_id' => 2,
				'start_date' => Carbon::create('2017', '7', '25', '8', '0', '0'),
				'end_date' => Carbon::create('2017', '7', '25', '17', '0', '0'),
				'cost' => 150000,
				'remark' => '',
				'status' => 3,
				'status_member' => 1,
				'status_art' => 1
			],
			[
				'member_id' => 2,
				'art_id' => 15,
				'work_time_id' => 1,
				'job_id' => 2,
				'start_date' => Carbon::create('2017', '7', '25', '8', '0', '0'),
				'end_date' => Carbon::create('2017', '7', '25', '17', '0', '0'),
				'cost' => 150000,
				'remark' => '',
				'status' => 2,
				'status_member' => 0,
				'status_art' => 0
			],
			[
				'member_id' => 2,
				'art_id' => 15,
				'work_time_id' => 1,
				'job_id' => 2,
				'start_date' => Carbon::create('2017', '7', '25', '8', '0', '0'),
				'end_date' => Carbon::create('2017', '7', '25', '17', '0', '0'),
				'cost' => 150000,
				'remark' => '',
				'status' => 4,
				'status_member' => 0,
				'status_art' => 0
			],
			[
				'member_id' => 2,
				'art_id' => 15,
				'work_time_id' => 1,
				'job_id' => 2,
				'start_date' => Carbon::create('2017', '7', '25', '8', '0', '0'),
				'end_date' => Carbon::create('2017', '7', '25', '17', '0', '0'),
				'cost' => 150000,
				'remark' => '',
				'status' => 5,
				'status_member' => 0,
				'status_art' => 0
			],
    	]);
    }
}
