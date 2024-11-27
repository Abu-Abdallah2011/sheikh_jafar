<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'username' => 'ABU ABDALLAH',
            'email' => 'abuabdallah@test.com',
            'role' => 'ADMIN',
            'email_verified_at' => now(),
            'password' => '$2y$10$Rag5QHXoYF9NKdE8rQm2tOjrFdR59.1.lBPxRAyW8VUIWT8DaAV8e', // password
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
