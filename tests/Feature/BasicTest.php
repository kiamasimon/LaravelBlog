<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BasicTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }


    public function testTakeOneFromTheBasket()
    {
        $post = new Post(['item_three']);
        $this->assertEquals('item_three', $post->takeOne());
          $this->assertNull($post->takeOne());
}
}
