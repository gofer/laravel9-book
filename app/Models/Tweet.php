<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    use HasFactory;

    // テーブルが命名規則に基づかない場合は紐づけが必要
    // 命名規則: テーブル名はクラス名のスネークケースかつ複数形
    // protected $table = 'tweet';

    // 主キーが`id`出ない場合は変更する必要がある
    // protected $primaryKey = 'tweet_id';

    // 主キーが増分整数(AUTO INCREMENT)でない場合はそれを宣言しておく
    // (UUIDなどを使う場合)
    // public $incrementing = false;

    // 主キーが整数でない場合はその型も指定する
    // protected $keyType = 'string';

    // タイムスタンプ(`created_at`，`updated_at`)が不要ならばそれを宣言しておく
    // public $timestamps = false;

    // `created_at`や`updated_at`のカラム名が異なる場合は指定する
    // const CREATED_AT = 'creation_date';
    // const UPDATED_AT = 'updated_date';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
