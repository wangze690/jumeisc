<?php

use Illuminate\Database\Seeder;

class ArticleTableSeeder extends Seeder
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
        	$date['title'] = str_random(5);
        	$date['content'] = str_random(10);
        	$date['profile'] = '/uploade2017-11-30/img5a20100573e26.jpeg';

        	  $d[] = $date;
        }
        DB::table('article')->insert($d);
    }
}
