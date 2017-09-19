<?php

use Illuminate\Database\Seeder;

class WeekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $weeks = [
            [
                'id' 		   => 1,
                'title'        => 'Monday',
                'abbreviation' => 'Mon',
            ],
            [
                'id' 			=> 2,
                'title' 		=> 'Tuesday',
                'abbreviation'  => 'Tue',
            ],
            [
                'id' 			=> 3,
                'title' 		=> 'Wednesday',
                'abbreviation'  => 'Wed',
            ],
            [
                'id' 			=> 4,
                'title' 		=> 'Thursday',
                'abbreviation'  => 'Thu',
            ],
            [
                'id' 			=> 5,
                'title' 		=> 'Friday',
                'abbreviation'  => 'Fri',
            ],
            [
                'id' 			=> 6,
                'title' 		=> 'Saturday',
                'abbreviation'  => 'Sat',
            ],
            [
                'id' 			=> 7,
                'title' 		=> 'Sunday',
                'abbreviation'  => 'Sun',
            ],
        ];

        DB::table('master_weeks')->insert($weeks);
    }
}
