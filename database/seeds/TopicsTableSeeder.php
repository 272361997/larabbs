<?php

use Illuminate\Database\Seeder;
use App\Models\Topic;
use App\Models\User;
use App\Models\Category;

class TopicsTableSeeder extends Seeder
{
    public function run()
    {
        // $topics = factory(Topic::class)->times(50)->make()->each(function ($topic, $index) {
            // if ($index == 0) {
                // $topic->field = 'value';
            // }
        // });

        // Topic::insert($topics->toArray());
        factory(Topic::class)->times(100)->create();
    }

}

