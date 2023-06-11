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
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                // password
                'remember_token' => Str::random(10),
            ]);

            $user->assignRole('parent');
        }

        $userP = User::create([
            'username' => 'Dickens Parent',
            'email' => 'dickens.c.anthony@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            // password
            'remember_token' => Str::random(10),
        ]);

        $userP->assignRole('parent');

        $userC = User::create([
            'username' => 'Dickens Child',
            'email' => 'dickens.anthony@gmail.com',
            'parent_id' => $userP->id,
            'age' => '22',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            // password
            'remember_token' => Str::random(10),
        ]);

        $userC->assignRole('child');

        for ($x = 0; $x < 3; $x++) {
            Language::create([
                'title' => $this->lang[$x],
                'slug' => Str::slug($this->lang[$x]),
            ]);
        }
    }
}