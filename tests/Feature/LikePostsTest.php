<?php

namespace Tests\Feature;

use App\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LikePostsTest extends TestCase
{
  public function a_post_can_be_liked()
  {
     $post = Post::factory()->create();

     $post->like();

     $this->assertCount(1, $post->likes);
  }
}
