<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Models\User;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testSuccessfulLogin(): void
    {
        $this->browse(function (Browser $browser) {
            // テスト用のユーザーを作成する
            $user = User::factory()->create();

            // パスを変更する
            $browser->visit('/login')
                // メールアドレスを入力する
                // テスト用のユーザーのメールアドレスを指定する
                ->type('email', $user->email)
                // パスワードを入力する
                ->type('password', 'password')
                // 「LOG IN」ボタンをクリックする
                ->press('LOG IN')
                // `/tweet`に遷移したことを確認する
                ->assertPathIs('/tweet')
                // ページ内に「つぶやきアプリ」が表示されていることの確認
                ->assertSee('つぶやきアプリ');
        });
    }
}
