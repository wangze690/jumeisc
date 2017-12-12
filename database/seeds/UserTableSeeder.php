<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $d = [];
        for($i=0;$i<50;$i++)
        {
        	$date = [];
        	$date['username'] = str_random(5);
        	$date['password'] = 123456;
        	$date['email'] = str_random(10).'qq@.com';
        	$date['profile'] = '/uploade2017-11-30/img5a20100573e26.jpeg';

        	  $d[] = $date;
        }
        DB::table('user')->insert($d);
    }
}
