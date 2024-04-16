<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Book;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Book::class;
    
     public function definition(): array
    {
        return [
            'id' => fake()->unique()->id(),
            'isbn' => fake()->unique()->isbn(13),
            'title' => fake()->title(),
            'author' => fake()->name(), 
            'description' => fake()->text(360),
            'date_published' => fake()->date(),
        ];
    }
}
