<?php

use App\Cow;
use App\Milk;
use Illuminate\Database\Seeder;

class MilkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cows = Cow::all();
        foreach ($cows as $cow) {
            $n = 10;
            while ($n < 29) {
                $date = date('2019-05-'.$n.' 00:00:00');
                Milk::create([
                    'cow_id' => $cow->id,
                    'amount_litres' => rand(11, 78),
                    'created_at' => $date
                ]);
                $n++;
            }
        }
    }
}
