<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BookControllerTest extends TestCase
{
    public function testGet() {
        $this->get("/api/books")
        ->assertStatus(200);
    }

    public function testGetByIdFound() {
        $this->get("/api/books/1")
        ->assertStatus(200)
        ->assertJson(["message" => "Data found"]);
    }

    public function testGetByIdNotFound() {
        $this->get("/api/books/9999999")
        ->assertStatus(200)
        ->assertJson(["message" => "Data not found"]);
    }
}
