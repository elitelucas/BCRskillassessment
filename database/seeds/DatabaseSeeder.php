<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('drinks')->insert([
            'id' => 1,
            'name' => 'Monster Ultra Sunrise',
            'description' => 'A refreshing orange beverage that has 75mg of caffeine per serving. Every can has two servings.',
            'amount' => 75,
        ]);
        DB::table('drinks')->insert([
            'id' => 2,
            'name' => 'Black Coffee',
            'description' => 'The classic, the average 8oz. serving of black coffee has 95mg of caffeine.',
            'amount' => 95,
        ]);
        DB::table('drinks')->insert([
            'id' => 3,
            'name' => 'Americano',
            'description' => 'Sometimes you need to water it down a bit... and in comes the americano with an average of 77mg. of caffeine per serving.',
            'amount' => 77,
        ]);
        DB::table('drinks')->insert([
            'id' => 4,
            'name' => 'Sugar free NOS',
            'description' => 'Another orange delight without the sugar. It has 130 mg. per serving and each can has two servings.',
            'amount' => 130,
        ]);
        DB::table('drinks')->insert([
            'id' => 5,
            'name' => '5 Hour Energy',
            'description' => 'And amazing shot of get up and go! Each 2 fl. oz. container has 200mg of caffeine to get you going.',
            'amount' => 200,
        ]);
    }
}
