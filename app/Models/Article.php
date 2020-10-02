<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;

    protected $guarded =[];

    public function url(){
     return route('article',["article_id"=>$this->id,"article_title"=>\Str::slug($this->title)]);
    }

    public function preview($anteprima){

        $anteprima= strip_tags($anteprima);
        $anteprima= substr($anteprima, 0, 150);
        $anteprima= $anteprima . "...";
        return $anteprima;
    }

    public function getPreview(){
        return $this->preview($this->description);
    }


    public function user(){
        return $this->belongsTo(User::class);
}

}
