<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker; 
use App\Models\Order;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i=1; $i < 40; $i++) { 
            $order = Order::create(
            [
            'user_id' => $i,
            'product_count' => $faker->numberBetween($min = 1, $max = 9),
            'status' => 'waiting',
            'sum' => '0',
            ]);
        }


        // DB::table('orders')->insert(
        //     [
        //         [
        //             'user_id'       => '1',
        //             'product_count' => '2',
        //             'status'        => 'waiting',
        //             'sum'           => '0',
        //         ],
        //         [
        //             'user_id'       => '2',
        //             'product_count' => '2',
        //             'status'        => 'inprogress',
        //             'sum'           => '0',
        //         ],
        //         [
        //             'user_id'       => '3',
        //             'product_count' => '2',
        //             'status'        => 'completed',
        //             'sum'           => '0',
        //         ],
        //         [
        //             'user_id'       => '4',
        //             'product_count' => '3',
        //             'status'        => 'waiting',
        //             'sum'           => '0',
        //         ],
        //         [
        //             'user_id'       => '5',
        //             'product_count' => '2',
        //             'status'        => 'inprogress',
        //             'sum'           => '0',
        //         ],
        //         [
        //             'user_id'       => '6',
        //             'product_count' => '2',
        //             'status'        => 'completed',
        //             'sum'           => '0',
        //         ],
        //         [
        //             'user_id'       => '7',
        //             'product_count' => '3',
        //             'status'        => 'waiting',
        //             'sum'           => '0',
        //         ],
        //         [
        //             'user_id'       => '8',
        //             'product_count' => '2',
        //             'status'        => 'inprogress',
        //             'sum'           => '0',
        //         ],
        //         [
        //             'user_id'       => '9',
        //             'product_count' => '2',
        //             'status'        => 'completed',
        //             'sum'           => '0',
        //         ],
        //         [
        //             'user_id'       => '10',
        //             'product_count' => '2',
        //             'status'        => 'waiting',
        //             'sum'           => '0',
        //         ],
        //     ]

        // );
    }
}
