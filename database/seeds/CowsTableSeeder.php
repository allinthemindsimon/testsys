<?php

use App\Cow;
use Illuminate\Database\Seeder;

class CowsTableSeeder extends Seeder
{
    /**
     * Run the database seeds. 'created_at'=>date('Y-m-d H:i:s', 'created_at'=>date('Y-m-d H:i:s'),),
     *
     * @return void
     */
    public function run()
    {
        factory(App\Cow::class, 30)->create();
    }
}
