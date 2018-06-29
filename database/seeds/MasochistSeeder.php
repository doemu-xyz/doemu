<?php

use Illuminate\Database\Seeder;

class MasochistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
			DB::table('masochists')->insert([
				'username' => 'おのかちお',
				'userid' => 1,
				'old' => '17',
				'wantold' => '26',
				'area' => '東京都',
				'description' => 'OLのお姉さんにいじめられたいです！！！！！！ twitter: @onokatio_',
			]);

    }
}
