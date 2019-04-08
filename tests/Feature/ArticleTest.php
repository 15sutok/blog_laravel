<?php

namespace Tests\Feature;

use App\User;
use Faker\Factory;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ArticleTest extends TestCase
{
    use WithFaker, RefreshDatabase;


    /** @test */

    public function a_user_can_create_an_article()
    {
        $this->actingAs(factory(User::class)->create());

        $attributes = [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'published_at' => $this->faker->date('Y-m-d')
        ];

        $this->post('/articles', $attributes);

        $this->assertDatabaseHas('articles', $attributes);
    }

    /** @test */

    public function guests_may_not_create_articles()
    {
        $this->post('/articles')->assertRedirect('login');
    }
}
