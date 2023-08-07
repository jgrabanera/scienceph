<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    //Article Model 
    //Coded in DOST-STII
    //June 18, 2023

    use HasFactory;

    protected $primaryKey = 'article_id';
    protected $table = 'articles';

    protected $fillable = [
        'title',
        'alias',
        'introtext',
        'section_id',
        'category_id',
        'created',
        'created_by',
        'created_by_alias',
        'modified',
        'modified_by',
        'img_path',
        'ordering',
        'urls',
        'url',
        'hits',
        'region',
        'tags',
        'record_trail',
    ];

    public function category(){
        return $this->hasOne(Category::class, 'category_id', 'category_id');
    }

    public function section(){
        return $this->hasOne(Section::class, 'section_id', 'section_id');
    }


}
