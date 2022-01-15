<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class CurrencySeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('currency')->insert([
            [
                'name'          => 'ZMW',
                'exchange_rate' => 1.000000,
                'base_currency' => 1,
                'status'        => 1,
            ],
          
    }
}
