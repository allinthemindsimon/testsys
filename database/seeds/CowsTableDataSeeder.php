<?php

use App\Cow;
use Illuminate\Database\Seeder;

class CowsTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds. 'created_at'=>date('Y-m-d H:i:s', 'created_at'=>date('Y-m-d H:i:s'),),
     *
     * @return void
     */
    public function run()
    {
        //I could have used Faker for this, it seemed over the top
        $names = array(
            array('name' => 'Allison', 'created_at'=>date('Y-m-d H:i:s'),),
            array('name' => 'Ana', 'created_at'=>date('Y-m-d H:i:s'),),
            array('name' => 'Alex', 'created_at'=>date('Y-m-d H:i:s'),),
            array('name' => 'Arlene', 'created_at'=>date('Y-m-d H:i:s'),),
            array('name' => 'Bertha', 'created_at'=>date('Y-m-d H:i:s'),),
            array('name' => 'Bonnie', 'created_at'=>date('Y-m-d H:i:s'),),
            array('name' => 'Beryl', 'created_at'=>date('Y-m-d H:i:s'),),
            array('name' => 'Chantal', 'created_at'=>date('Y-m-d H:i:s'),),
            array('name' => 'Cristobal', 'created_at'=>date('Y-m-d H:i:s'),),
            array('name' => 'Claudette', 'created_at'=>date('Y-m-d H:i:s'),),
            array('name' => 'Charley', 'created_at'=>date('Y-m-d H:i:s'),),
            array('name' => 'Cindy', 'created_at'=>date('Y-m-d H:i:s'),),
            array('name' => 'Chris', 'created_at'=>date('Y-m-d H:i:s'),),
            array('name' => 'Dolly', 'created_at'=>date('Y-m-d H:i:s'),),
            array('name' => 'Danielle', 'created_at'=>date('Y-m-d H:i:s'),),
            array('name' => 'Debby', 'created_at'=>date('Y-m-d H:i:s'),),
            array('name' => 'Erin', 'created_at'=>date('Y-m-d H:i:s'),),
            array('name' => 'Erika', 'created_at'=>date('Y-m-d H:i:s'),),
            array('name' => 'Emily', 'created_at'=>date('Y-m-d H:i:s'),),
            array('name' => 'Felix', 'created_at'=>date('Y-m-d H:i:s'),),
            array('name' => 'Fay', 'created_at'=>date('Y-m-d H:i:s'),),
            array('name' => 'Florence', 'created_at'=>date('Y-m-d H:i:s'),),
            array('name' => 'Grace', 'created_at'=>date('Y-m-d H:i:s'),),
            array('name' => 'Gert', 'created_at'=>date('Y-m-d H:i:s'),),
            array('name' => 'Hanna', 'created_at'=>date('Y-m-d H:i:s'),),
            array('name' => 'Helene', 'created_at'=>date('Y-m-d H:i:s'),),
            array('name' => 'Iris', 'created_at'=>date('Y-m-d H:i:s'),),
            array('name' => 'Isidore', 'created_at'=>date('Y-m-d H:i:s'),),
            array('name' => 'Isabel', 'created_at'=>date('Y-m-d H:i:s'),),
            array('name' => 'Irene', 'created_at'=>date('Y-m-d H:i:s'),),
            array('name' => 'Josephine', 'created_at'=>date('Y-m-d H:i:s'),),
            array('name' => 'Joyce', 'created_at'=>date('Y-m-d H:i:s'),),
            array('name' => 'Karen', 'created_at'=>date('Y-m-d H:i:s'),),
            array('name' => 'Kate', 'created_at'=>date('Y-m-d H:i:s'),),
            array('name' => 'Katrina', 'created_at'=>date('Y-m-d H:i:s'),),
            array('name' => 'Lili', 'created_at'=>date('Y-m-d H:i:s'),),
            array('name' => 'Lisa', 'created_at'=>date('Y-m-d H:i:s'),),
            array('name' => 'Michelle', 'created_at'=>date('Y-m-d H:i:s'),),
            array('name' => 'Mindy', 'created_at'=>date('Y-m-d H:i:s'),),
            array('name' => 'Maria', 'created_at'=>date('Y-m-d H:i:s'),),
            array('name' => 'Nana', 'created_at'=>date('Y-m-d H:i:s'),),
            array('name' => 'Nicole', 'created_at'=>date('Y-m-d H:i:s'),),
            array('name' => 'Nadine', 'created_at'=>date('Y-m-d H:i:s'),),
            array('name' => 'Olga', 'created_at'=>date('Y-m-d H:i:s'),),
            array('name' => 'Odette', 'created_at'=>date('Y-m-d H:i:s'),),
            array('name' => 'Ophelia', 'created_at'=>date('Y-m-d H:i:s'),),
            array('name' => 'Paloma', 'created_at'=>date('Y-m-d H:i:s'),),
            array('name' => 'Paula', 'created_at'=>date('Y-m-d H:i:s'),),
            array('name' => 'Patty', 'created_at'=>date('Y-m-d H:i:s'),),
            array('name' => 'Rebekah', 'created_at'=>date('Y-m-d H:i:s'),),
            array('name' => 'Rose', 'created_at'=>date('Y-m-d H:i:s'),),
            array('name' => 'Rita', 'created_at'=>date('Y-m-d H:i:s'),),
            array('name' => 'Sally', 'created_at'=>date('Y-m-d H:i:s'),),
            array('name' => 'Sam', 'created_at'=>date('Y-m-d H:i:s'),),
            array('name' => 'Sandy', 'created_at'=>date('Y-m-d H:i:s'),),
            array('name' => 'Tanya', 'created_at'=>date('Y-m-d H:i:s'),),
            array('name' => 'Teresa', 'created_at'=>date('Y-m-d H:i:s'),),
            array('name' => 'Tammy', 'created_at'=>date('Y-m-d H:i:s'),),
            array('name' => 'Vicky', 'created_at'=>date('Y-m-d H:i:s'),),
            array('name' => 'Valerie', 'created_at'=>date('Y-m-d H:i:s'),),
            array('name' => 'Wendy', 'created_at'=>date('Y-m-d H:i:s'),),
            array('name' => 'Wilfred', 'created_at'=>date('Y-m-d H:i:s'),),
            array('name' => 'Wanda', 'created_at'=>date('Y-m-d H:i:s'),),
            array('name' => 'Wilma', 'created_at'=>date('Y-m-d H:i:s'),),
            array('name' => 'FredaCow', 'created_at'=>date('Y-m-d H:i:s'),)
        );

        Cow::insert($names);
    }
}
