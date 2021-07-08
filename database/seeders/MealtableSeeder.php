<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class MealtableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mealtables')->insert([

            'mealcatid' => '1',
            'mealcatplanid' => '1',
            'mealcatweekid' => '1',
            'mealdayid' => '1',
            'title' => 'Spaghetti with Tomato Sauce',
            'image' => 'https://as.ftcdn.net/r/v1/pics/491a17ef0536de79e52a8cb5a52592f0ad5f3471/home/discover_collections/21Jun/photos.webp',
            'ingredients' => '["8 Veal Cutlets","8 Veal Cutlets","fdaefaedf"]',
            'steps' => '["Tenderize the veal to about 2\u20134mm, and salt on both sides.","Cut the tomatoes and the onion into small pieces.","Cut"]',
            'mealtime' => 'Breakfast',
            'duration' => '20',
            'calories' => '240',
            'caloriesperc' => '28',
            'carbo' => '30',
            'carboperc' => '18',
            'proteins' => '16',
            'proteinsperc' => '12',
            'fats' => '10',
            'fatsperc' => '20',
            'complexity' => 'Easy',

        ]);

        DB::table('mealtables')->insert([

            'mealcatid' => '1',
            'mealcatplanid' => '1',
            'mealcatweekid' => '1',
            'mealdayid' => '1',
            'title' => 'Spaghetti with Tomato Sauce',
            'image' => 'https://as.ftcdn.net/r/v1/pics/ba27c28674c8d58886a4e4f9391a4c813750e78c/home/discover_collections/21Jun/audio.webp',
            'ingredients' => '["8 Veal Cutlets","8 Veal Cutlets","fdaefaedf"]',
            'steps' => '["Tenderize the veal to about 2\u20134mm, and salt on both sides.","Cut the tomatoes and the onion into small pieces.","Cut"]',
            'mealtime' => 'Lunch',
            'duration' => '20',
            'calories' => '360',
            'caloriesperc' => '38',
            'carbo' => '20',
            'carboperc' => '28',
            'proteins' => '20',
            'proteinsperc' => '18',
            'fats' => '10',
            'fatsperc' => '20',
            'complexity' => 'Medium',

        ]);

        DB::table('mealtables')->insert([

            'mealcatid' => '1',
            'mealcatplanid' => '1',
            'mealcatweekid' => '1',
            'mealdayid' => '1',
            'title' => 'Spaghetti with Tomato Sauce',
            'image' => 'https://as.ftcdn.net/r/v1/pics/1aa83ed018fa0e131e77d3e12df1015d68469b06/home/discover_collections/21Jun/video.webp',
            'ingredients' => '["8 Veal Cutlets","8 Veal Cutlets","fdaefaedf"]',
            'steps' => '["Tenderize the veal to about 2\u20134mm, and salt on both sides.","Cut the tomatoes and the onion into small pieces.","Cut"]',
            'mealtime' => 'Dinner',
            'duration' => '20',
            'calories' => '240',
            'caloriesperc' => '28',
            'carbo' => '30',
            'carboperc' => '18',
            'proteins' => '16',
            'proteinsperc' => '12',
            'fats' => '10',
            'fatsperc' => '20',
            'complexity' => 'Easy',

        ]);


        DB::table('mealtables')->insert([

            'mealcatid' => '2',
            'mealcatplanid' => '1',
            'mealcatweekid' => '1',
            'mealdayid' => '1',
            'title' => 'Spaghetti with Tomato Sauce',
            'image' => 'https://as.ftcdn.net/r/v1/pics/1aa83ed018fa0e131e77d3e12df1015d68469b06/home/discover_collections/21Jun/video.webp',
            'ingredients' => '["8 Veal Cutlets","8 Veal Cutlets","fdaefaedf"]',
            'steps' => '["Tenderize the veal to about 2\u20134mm, and salt on both sides.","Cut the tomatoes and the onion into small pieces.","Cut"]',
            'mealtime' => 'Evening',
            'duration' => '20',
            'calories' => '240',
            'caloriesperc' => '28',
            'carbo' => '30',
            'carboperc' => '18',
            'proteins' => '16',
            'proteinsperc' => '12',
            'fats' => '10',
            'fatsperc' => '20',
            'complexity' => 'Difficult',

        ]);
    }
}
