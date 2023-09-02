<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Income extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'incomes';
    protected $guarded = [];

    public function article() {
        return $this->belongsTo(IncomeArticle::class, 'article_id', 'id');
    }
}
