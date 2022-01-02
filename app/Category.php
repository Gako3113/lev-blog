<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //Postに対するリレーション
    //Categoryモデルのインスタンスから関連する複数のPostモデルのインスタンス->複数形postsを呼び出せる
    public function posts()
    {
        return $this->hasMany('App\Post');
    }
    
    public function getByCategory(int $limit_count = 5)
    {
         return $this->posts()->with('category')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}
