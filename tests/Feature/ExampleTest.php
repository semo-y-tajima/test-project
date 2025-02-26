<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTruncation;
use App\Models\User;

class ExampleTest extends TestCase
{
    use DatabaseTruncation;

    public function setUp(): void
    {
        parent::setUp();

    }

    public function test_database_truncation_works()
    {
        // ユーザーを作成
        User::factory()->create(['email' => 'test@example.com']);

        // データが1件あることを確認
        $this->assertDatabaseHas('users', ['email' => 'test@example.com']);
    }

    public function test_database_is_empty()
    {
        // 上のテストが実行された後でも、データはクリアされているか確認
        $this->assertDatabaseCount('users', 0);
    }
}
