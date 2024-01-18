<?php

namespace Tests\Feature\Tweet;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Tweet;

class DeleteTest extends TestCase
{
    use RefreshDatabase;

    public function test_delete_successed()
    {
        // ユーザーを作成
        $user = User::factory()->create();

        // つぶやきを差k末井
        $tweet = Tweet::factory()->create(['user_id' => $user->id]);

        // 指定したユーザーでログインした状態にする
        $this->actingAs($user);

        // 作成したつぶやきIDを指定
        $response = $this->delete('/tweet/delete/' . $tweet->id);

        $response->assertRedirect('/tweet');
    }
}
