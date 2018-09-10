<?php

use Illuminate\Database\Seeder;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert(
            [
                [
                    'user_id'    => '1',
                    'product_id' => '1',
                    'content'    => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
                    'rated'      => '5.0',
                ],
                [
                    'user_id'    => '2',
                    'product_id' => '1',
                    'content'    => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
                    'rated'      => '4.0',

                ],
                [
                    'user_id'    => '3',
                    'product_id' => '1',
                    'content'    => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
                    'rated'      => '3.0',

                ],
                [
                    'user_id'    => '1',
                    'product_id' => '2',
                    'content'    => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
                    'rated'      => '4.0',

                ],
                [
                    'user_id'    => '4',
                    'product_id' => '2',
                    'content'    => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
                    'rated'      => '1.0',

                ],
                [
                    'user_id'    => '5',
                    'product_id' => '2',
                    'content'    => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
                    'rated'      => '3.5',

                ],
                [
                    'user_id'    => '1',
                    'product_id' => '3',
                    'content'    => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
                    'rated'      => '4.0',

                ],
                [
                    'user_id'    => '2',
                    'product_id' => '3',
                    'content'    => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
                    'rated'      => '2.0',

                ],
                [
                    'user_id'    => '3',
                    'product_id' => '3',
                    'content'    => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
                    'rated'      => '4.0',

                ],
                [
                    'user_id'    => '4',
                    'product_id' => '4',
                    'content'    => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
                    'rated'      => '4.0',

                ],
                [
                    'user_id'    => '5',
                    'product_id' => '4',
                    'content'    => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
                    'rated'      => '1.0',

                ],
                [
                    'user_id'    => '1',
                    'product_id' => '4',
                    'content'    => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
                    'rated'      => '5.0',

                ],
                [
                    'user_id'    => '1',
                    'product_id' => '5',
                    'content'    => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
                    'rated'      => '5.0',

                ],
                [
                    'user_id'    => '2',
                    'product_id' => '5',
                    'content'    => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
                    'rated'      => '5.0',

                ],
                [
                    'user_id'    => '3',
                    'product_id' => '5',
                    'content'    => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
                    'rated'      => '5.0',

                ],
                [
                    'user_id'    => '3',
                    'product_id' => '6',
                    'content'    => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
                    'rated'      => '4.0',

                ],
                [
                    'user_id'    => '4',
                    'product_id' => '6',
                    'content'    => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
                    'rated'      => '4.0',

                ],
                [
                    'user_id'    => '5',
                    'product_id' => '6',
                    'content'    => 'cung tamcsacascascascc',
                    'rated'      => '4.0',

                ],
                [
                    'user_id'    => '1',
                    'product_id' => '7',
                    'content'    => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
                    'rated'      => '2.0',

                ],
                [
                    'user_id'    => '2',
                    'product_id' => '7',
                    'content'    => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
                    'rated'      => '2.0',

                ],
                [
                    'user_id'    => '3',
                    'product_id' => '7',
                    'content'    => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
                    'rated'      => '2.0',

                ],
                [
                    'user_id'    => '2',
                    'product_id' => '8',
                    'content'    => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
                    'rated'      => '3.0',

                ],
                [
                    'user_id'    => '3',
                    'product_id' => '8',
                    'content'    => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
                    'rated'      => '4.0',

                ],
                [
                    'user_id'    => '4',
                    'product_id' => '8',
                    'content'    => 'cung tamcsacascascasddddddddscc',
                    'rated'      => '4.0',

                ],
                [
                    'user_id'    => '3',
                    'product_id' => '9',
                    'content'    => 'cung tamcsacascascascc',
                    'rated'      => '4.5',

                ],
                [
                    'user_id'    => '4',
                    'product_id' => '9',
                    'content'    => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
                    'rated'      => '4.5',

                ],
                [
                    'user_id'    => '5',
                    'product_id' => '9',
                    'content'    => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
                    'rated'      => '4.0',

                ],
                [
                    'user_id'    => '1',
                    'product_id' => '10',
                    'content'    => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
                    'rated'      => '1.0',

                ],
                [
                    'user_id'    => '3',
                    'product_id' => '10',
                    'content'    => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
                    'rated'      => '5.0',

                ],
                [
                    'user_id'    => '1',
                    'product_id' => '11',
                    'content'    => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
                    'rated'      => '1.0',

                ],
                [
                    'user_id'    => '2',
                    'product_id' => '11',
                    'content'    => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
                    'rated'      => '4.0',

                ],
                [
                    'user_id'    => '1',
                    'product_id' => '12',
                    'content'    => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
                    'rated'      => '3.0',

                ],
                [
                    'user_id'    => '2',
                    'product_id' => '12',
                    'content'    => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
                    'rated'      => '4.0',

                ],
                [
                    'user_id'    => '3',
                    'product_id' => '13',
                    'content'    => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
                    'rated'      => '4.0',

                ],
                [
                    'user_id'    => '4',
                    'product_id' => '13',
                    'content'    => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
                    'rated'      => '5.0',

                ],
                [
                    'user_id'    => '5',
                    'product_id' => '14',
                    'content'    => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
                    'rated'      => '4.0',

                ],
                [
                    'user_id'    => '1',
                    'product_id' => '14',
                    'content'    => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
                    'rated'      => '3.0',

                ],
                [
                    'user_id'    => '2',
                    'product_id' => '15',
                    'content'    => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
                    'rated'      => '1.0',

                ],
                [
                    'user_id'    => '3',
                    'product_id' => '15',
                    'content'    => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
                    'rated'      => '1.0',

                ],
                [
                    'user_id'    => '4',
                    'product_id' => '16',
                    'content'    => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
                    'rated'      => '3.5',

                ],
                [
                    'user_id'    => '5',
                    'product_id' => '16',
                    'content'    => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
                    'rated'      => '3.0',

                ],
                [
                    'user_id'    => '1',
                    'product_id' => '17',
                    'content'    => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
                    'rated'      => '4.0',

                ], [
                'user_id'    => '2',
                'product_id' => '17',
                'content'    => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
                'rated'      => '4.5',

            ],
                [
                    'user_id'    => '3',
                    'product_id' => '18',
                    'content'    => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
                    'rated'      => '3.0',

                ],
                [
                    'user_id'    => '4',
                    'product_id' => '18',
                    'content'    => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
                    'rated'      => '3.0',

                ],
                [
                    'user_id'    => '5',
                    'product_id' => '19',
                    'content'    => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
                    'rated'      => '1.0',

                ],
                [
                    'user_id'    => '1',
                    'product_id' => '19',
                    'content'    => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
                    'rated'      => '4.5',

                ],
                [
                    'user_id'    => '2',
                    'product_id' => '20',
                    'content'    => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
                    'rated'      => '4.0',

                ],
                [
                    'user_id'    => '3',
                    'product_id' => '20',
                    'content'    => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
                    'rated'      => '3.0',

                ],
                [
                    'user_id'    => '4',
                    'product_id' => '21',
                    'content'    => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
                    'rated'      => '4.5',

                ],
                [
                    'user_id'    => '5',
                    'product_id' => '21',
                    'content'    => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
                    'rated'      => '4.5',

                ], [
                'user_id'    => '1',
                'product_id' => '22',
                'content'    => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
                'rated'      => '3.0',

            ],
                [
                    'user_id'    => '2',
                    'product_id' => '22',
                    'content'    => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
                    'rated'      => '5.0',

                ],
                [
                    'user_id'    => '3',
                    'product_id' => '23',
                    'content'    => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
                    'rated'      => '5.0',

                ],
                [
                    'user_id'    => '4',
                    'product_id' => '23',
                    'content'    => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
                    'rated'      => '4.0',

                ],
                [
                    'user_id'    => '5',
                    'product_id' => '24',
                    'content'    => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
                    'rated'      => '4.5',

                ],
                [
                    'user_id'    => '1',
                    'product_id' => '24',
                    'content'    => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
                    'rated'      => '4.5',

                ],
                [
                    'user_id'    => '2',
                    'product_id' => '25',
                    'content'    => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
                    'rated'      => '4.0',

                ],
                [
                    'user_id'    => '3',
                    'product_id' => '25',
                    'content'    => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
                    'rated'      => '3.0',

                ],
                [
                    'user_id'    => '4',
                    'product_id' => '26',
                    'content'    => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
                    'rated'      => '4.5',

                ],
                [
                    'user_id'    => '5',
                    'product_id' => '26',
                    'content'    => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
                    'rated'      => '1.0',

                ],
                [
                    'user_id'    => '1',
                    'product_id' => '27',
                    'content'    => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
                    'rated'      => '4.5',

                ],
                [
                    'user_id'    => '2',
                    'product_id' => '27',
                    'content'    => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
                    'rated'      => '5.0',

                ],
                [
                    'user_id'    => '3',
                    'product_id' => '28',
                    'content'    => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
                    'rated'      => '5.0',

                ],
                [
                    'user_id'    => '4',
                    'product_id' => '28',
                    'content'    => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
                    'rated'      => '4.5',

                ],
                [
                    'user_id'    => '5',
                    'product_id' => '29',
                    'content'    => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
                    'rated'      => '4.5',

                ],
                [
                    'user_id'    => '1',
                    'product_id' => '29',
                    'content'    => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
                    'rated'      => '3.0',

                ],
                [
                    'user_id'    => '2',
                    'product_id' => '29',
                    'content'    => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
                    'rated'      => '3.0',

                ],
                [
                    'user_id'    => '3',
                    'product_id' => '30',
                    'content'    => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
                    'rated'      => '4.0',

                ],
                [
                    'user_id'    => '4',
                    'product_id' => '30',
                    'content'    => 'cascnasoncasklnclknclkasnclkanlksanclkanclkasnclksacung tamcsacascascascc',
                    'rated'      => '4.5',

                ],
                [
                    'user_id'    => '5',
                    'product_id' => '30',
                    'content'    => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
                    'rated'      => '2.5',

                ],
                [
                    'user_id'    => '1',
                    'product_id' => '31',
                    'content'    => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
                    'rated'      => '5.0',

                ],
                [
                    'user_id'    => '2',
                    'product_id' => '31',
                    'content'    => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
                    'rated'      => '5.0',

                ],

            ]

        );
    }
}
