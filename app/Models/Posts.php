<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Rubric;
use Illuminate\Support\Str;
use App\Models\Tag;
class Posts extends Model
{
    use HasFactory;
    protected $table = 'posts';
    //задать другое название таблицы, если отличаеться, хороший тон , по конвенции чтобы названия совападали

    //поле первичного ключа предполагаеться что называется 'id' и является целочисленным
    //protected $primaryKey = 'post_id'; //если у нас не так, то задаем вручную первичный ключ

    //public $incrementing = false;
    //по умолчанию инкрементирование у нас true, если не хотим увеличения скаждой итерацией нужно задать вручную false

    //protected $keyType = 'string';
    //задаем тип первичного ключа, если он у нас не целочисленный, а строка

    //public $timestamps = false; //если не хотим автозаполнение временного штампа

    protected $attributes = [
        'content' => 'lorem ipsum...2',

    ];

    public function rubric()
    {
        return $this->belongsTo(Rubric::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function SetTitleAttribute($value)
    {
        $this->attributes['title'] = Str::title($value);
    }
}
