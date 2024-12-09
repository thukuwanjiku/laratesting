<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CreatePostTest extends TestCase
{

    public function test_can_create_post_from_new_post_form(){
        //load new post form
        $formResponse = $this->get('/posts/create');

        //assert that the form has been loaded successfully
        $formResponse->assertStatus(200);

        //fill the new post form
        
    }
}
