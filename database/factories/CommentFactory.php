<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\User;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    protected $model = Comment::class;

    public function definition(): array
    {
        return [ 
            'content' => fake()->realText(500), 
            'user_id' => User::inRandomOrder()->value('id'),    
            'post_id' => Post::inRandomOrder()->value('id'),    
        ];
    }
}
