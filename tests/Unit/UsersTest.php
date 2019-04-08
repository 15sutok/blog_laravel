<?php

namespace Tests\Unit;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersTest extends TestCase
{
    use RefreshDatabase;

    /** @test */

        public function a_user_can_have_many_articles()
    {
        $user = factory(User::class)->create();

        $attributes = [
            'title' => 'test title',
            'description' => ' test description',
            'published_at' => '2019-04-04'
        ];

        $user->articles()->create($attributes);

        $article = $user->articles;


        $this->assertEquals($attributes['title'], $article[0]->title);
    }
}
