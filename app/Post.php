<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    
    //モデル :: with(リレーション名) -> paginate()またはget()など; = Eagerローディングといい、リレーションによって増えてしまうデータベースアクセスの回数を減らす　重くならないようにする 
    public function getPaginateByLimit(int $limit_count = 5)
    {
        // updated_atで降順に並べたあと、limitで件数制限をかける。DESC＝降順、ASC＝昇順
        return $this::with('category')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
    protected $fillable = [
            'title',
            'body',
            'category_id'
        ];
    
    //Categoryに対するリレーション
    //Postモデルのインスタンスから関連する1つのCategoryモデルのインスタンス->単数形categoryを呼び出せる
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}

