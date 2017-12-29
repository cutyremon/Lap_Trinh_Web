<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\User;
use App\Models\Order;
use App\Models\OrderDetail;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i=0; $i < 60; $i++) { 
            $user = User::create(
            [
            'email' => $faker->email,
            'password' => bcrypt($faker->word),
            'name' => $faker->username,
            'date_of_birth' => $faker->date,
            'gender' => $faker->title('male'|'female') ,
            'phone'  => $faker->phonenumber,
            'address' => $faker->address,
            'avatar' => $faker->image,
            ]);
            $a = $faker->numberBetween($min = 1, $max = 3);
            for ($j=1; $j < $a; $j++) { 
                $order = Order::create(
                [
                'user_id' => $user->id,
                'product_count' => $faker->numberBetween($min = 1, $max = 9),
                'status' => 'waiting',
                'sum' => '0',
                ]);
                $b = array();
                for ($z=0; $z <$order->product_count ; $z++) { 
                    $mang[1] = $faker->numberBetween($min = 1, $max = 30);
                    $mang[2] = $order->id;
                    $mang[3] = $faker->numberBetween($min = 1, $max = 6);
                    
                    $m = $z;
                    $b[$z] = $mang[1];
                    $c = count($b)-1;
                    for ($k=0; $k <$c ; $k++) { 
                        if($b[$k] == $b[$c]) 
                            $z = $z-1;
                    }
                    if($z == $m-1) continue;
                    $orderdetail = OrderDetail::create(
                    [
                    'product_id' => $mang[1],
                    'order_id' =>$mang[2],
                    'quantity' => $mang[3],
                    'total' => '0',        
                    ]);
                }
            }
        }
        // DB::table('users')->insert(
        //     [
        //         [
        //             'email'         => 'admin@gmail.com',
        //             'password'      => bcrypt('123456'),
        //             'name'          => 'admin',
        //             'date_of_birth' => '19961104',
        //             'gender'        => '1',
        //             'phone'         => '0943901988',
        //             'address'       => '117 Hang Bong, Hoan Kiem, Ha Noi',
        //             'level'         => '1',
        //         ],
        //         [
        //             'email'         => 'nguyenvantrung2016@gmail.com',
        //             'password'      => bcrypt('flashteam1996'),
        //             'name'          => 'admin',
        //             'date_of_birth' => '19961104',
        //             'gender'        => '1',
        //             'phone'         => '0943901988',
        //             'address'       => '117 Hang Bong, Hoan Kiem, Ha Noi',
        //             'level'         => '1',
        //         ],
        //         [
        //             'email'         => 'ynghiacuocsong2015@gmail.com',
        //             'password'      => bcrypt('flashteam1996'),
        //             'name'          => 'duong',
        //             'date_of_birth' => '19961105',
        //             'gender'        => '1',
        //             'phone'         => '0943966988',
        //             'address'       => '119 Hang Ma, Hoan Kiem, Ha Noi',
        //             'level'         => '0',
        //         ],
        //         [
        //             'email'         => 'nguyenvantrung2017@gmail.com',
        //             'password'      => bcrypt('flashteam1996'),
        //             'name'          => 'Pho Duc Dat',
        //             'date_of_birth' => '19801005',
        //             'gender'        => '1',
        //             'phone'         => '0915966988',
        //             'address'       => '200 Nghia Tan, Cau Giay, Ha Noi',
        //             'level'         => '0',
        //         ],
        //         [
        //             'email'         => 'minhth@yahoo.com',
        //             'password'      => bcrypt('abc12345'),
        //             'name'          => 'Tran Hoang Minh',
        //             'date_of_birth' => '19961212',
        //             'gender'        => '1',
        //             'phone'         => '0915136988',
        //             'address'       => '420 Quan Hoa, Cau Giay, Ha Noi',
        //             'level'         => '0',
        //         ],
        //         [
        //             'email'         => 'NhanNT@gmail.com',
        //             'password'      => bcrypt('qwerty123'),
        //             'name'          => 'Nguyen Thanh Nhan',
        //             'date_of_birth' => '19960606',
        //             'gender'        => '1',
        //             'phone'         => '0915136555',
        //             'address'       => '300 Dich Vong, Cau Giay, Ha Noi',
        //             'level'         => '0',
        //         ],
        //         [
        //             'email'         => 'ThaoPN@gmail.com',
        //             'password'      => bcrypt('666666'),
        //             'name'          => 'Pham Ngoc Thao',
        //             'date_of_birth' => '19960608',
        //             'gender'        => '0',
        //             'phone'         => '0915133355',
        //             'address'       => '15 Nguyen Van Huong, Thao Dien, Ho Chi Minh',
        //             'level'         => '0',
        //         ],
        //         [
        //             'email'         => 'AnhNH@gmail.com',
        //             'password'      => bcrypt('ngohaianh'),
        //             'name'          => 'Ngo Hai Anh',
        //             'date_of_birth' => '19950708',
        //             'gender'        => '0',
        //             'phone'         => '0915233254',
        //             'address'       => '34 Nghia Do, Cau Giay, Ha Noi',
        //             'level'         => '0',
        //         ],
        //         [
        //             'email'         => 'HoangDucQuan@gmail.com',
        //             'password'      => bcrypt('123123'),
        //             'name'          => 'Hoang Duc Quan',
        //             'date_of_birth' => '19961208',
        //             'gender'        => '1',
        //             'phone'         => '0911233355',
        //             'address'       => '300 Mai Dich, Cau Giay, Ha Noi',
        //             'level'         => '0',
        //         ],
        //         [
        //             'email'         => 'HungNM@gmail.com',
        //             'password'      => bcrypt('hung123'),
        //             'name'          => 'Nguyen Manh Hung',
        //             'date_of_birth' => '19701208',
        //             'gender'        => '1',
        //             'phone'         => '0932956355',
        //             'address'       => '77 Mai Dich, Cau Giay, Ha Noi',
        //             'level'         => '0',
        //         ],

        //     ]
        // );
    }
}