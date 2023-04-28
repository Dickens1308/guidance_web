<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Language;
use App\Models\Question;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;

class CourseSeeder extends Seeder
{

    protected array $videos = [
        "https://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4",
        "https://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ElephantsDream.mp4",
        "https://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ForBiggerBlazes.mp4",
        "https://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ForBiggerEscapes.mp4",
        "https://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ForBiggerFun.mp4",
        "https://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ForBiggerJoyrides.mp4",
        "https://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ForBiggerMeltdowns.mp4",
        "https://commondatastorage.googleapis.com/gtv-videos-bucket/sample/Sintel.mp4",
        "https://commondatastorage.googleapis.com/gtv-videos-bucket/sample/SubaruOutbackOnStreetAndDirt.mp4",
        "https://commondatastorage.googleapis.com/gtv-videos-bucket/sample/TearsOfSteel.mp4",
        "https://commondatastorage.googleapis.com/gtv-videos-bucket/sample/VolkswagenGTIReview.mp4",
        "https://commondatastorage.googleapis.com/gtv-videos-bucket/sample/WeAreGoingOnBullrun.mp4",
        "https://commondatastorage.googleapis.com/gtv-videos-bucket/sample/WhatCarCanYouGetForAGrand.mp4",
    ];

    protected array $lang = [
        'Python',
        'Scratch',
        'Ruby',
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Role::create(['name' => 'parent']);
        Role::create(['name' => 'child']);

        for ($x = 0; $x <= 10; $x++) {
            $user = User::create([
                'username' => fake()->name(),
                'email' => fake()->unique()->safeEmail(),
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'remember_token' => Str::random(10),
            ]);

            $user->assignRole('parent');
        }

        $userP = User::create([
            'username' => 'Dickens Parent',
            'email' => 'dickens.c.anthony@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);

        $userP->assignRole('parent');

        $userC = User::create([
            'username' => 'Dickens Child',
            'email' => 'dickens.anthony@gmail.com',
            'parent_id' => $userP->id,
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);

        $userC->assignRole('child');

        for ($x = 0; $x < 3; $x++) {
            Language::create([
                'title' => $this->lang[$x],
                'slug' => fake()->slug(),
            ]);
        }

        $this->createCourse(1);
        $this->createCourse(2);
        $this->createCourse(3);

//        for ($x = 0; $x < 20; $x++) {
//            Video::create([
//                'title' => fake()->sentence(nbWords: 2, variableNbWords: false),
//                'slug' => fake()->slug(),
//                'location' => $this->videos[array_rand($this->videos)],
//                'course_id' => rand(min: 1, max: 9),
//            ]);
//        }

        $this->createQuestion(1);
        $this->createQuestion(2);
        $this->createQuestion(3);
        $this->createQuestion(4);
        $this->createQuestion(5);
        $this->createQuestion(6);
        $this->createQuestion(7);
        $this->createQuestion(8);
        $this->createQuestion(9);

//        for ($x = 0; $x < 5000; $x++) {
//            Progress::create([
//                'user_id' => rand(min: 1, max: 10),
//                'question_id' => rand(min: 1, max: 1000),
//                'select_answer' => $choice[array_rand($choice)],
//            ]);
//        }

    }

    private function createCourse($id): void
    {
        for ($x = 0; $x < 3; $x++) {
            Course::create([
                'title' => fake()->sentence(nbWords: 2, variableNbWords: false),
                'slug' => fake()->slug(),
                'language_id' => $id,
            ]);
        }
    }

    private function createQuestion($courseID): void
    {
        $choice = ['a', 'b', 'c'];
        $img = [null, fake()->imageUrl(width: 500, height: 500)];

        for ($x = 0; $x < rand(min: 2, max: 3); $x++) {
            Question::create([
                'title' => fake()->sentence(nbWords: 3),
                'learning_title' => fake()->sentence(nbWords: 6),
                'learning_desc' => fake()->sentence(nbWords: 60),
                'slug' => fake()->slug(),
                'choice_one' => fake()->sentence(nbWords: rand(min: 2, max: 6)),
                'choice_two' => fake()->sentence(nbWords: rand(min: 2, max: 6)),
                'choice_three' => fake()->sentence(nbWords: rand(min: 2, max: 6)),
                'correct_answer' => $choice[array_rand($choice)],
                'code_image_url' => $img[array_rand($img)],
                'course_id' => $courseID,
            ]);
        }
    }
}
