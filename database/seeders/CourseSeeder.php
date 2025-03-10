<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;
use Illuminate\Support\Arr;
use Carbon\Carbon;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        $names = ['History', 'Mathematics', 'Sport', 'Science', 'Computer', 'Physics'];
        $description = ['this is a Course description', 'this is a Course description'];

        for ($i = 0; $i < 4; $i++) {
            Course::create([
                'name' => Arr::random($names),
                'description' => Arr::random($description),
                'start_at' => Carbon::now()->subDays(rand(0, 30)),
                'end_at' => Carbon::now(),
            ]);
        }


    }
}
