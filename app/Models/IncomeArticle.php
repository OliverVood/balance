<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class IncomeArticle extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'income_articles';
    protected $guarded = [];

    public function incomes() {
        return $this->hasMany(Income::class, 'article_id', 'id');
    }

    public function tags() {
        return $this->belongsToMany(Tag::class, 'income_article_tags', 'article_id', 'tag_id');
    }
}
