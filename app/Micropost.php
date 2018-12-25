<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Micropost extends Model
{
    protected $fillable = ['content', 'user_id'];
    public function user()
    {
        /**
         * Micropostクラスに所属するユーザーを取得する
         */
        
        return $this->belongsTo(User::class);
    }
    
}
