<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    #----------------------------------------------------------------
    #  リレーションの設定
    #----------------------------------------------------------------
    //記事は1人のユーザーが保持する。
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
