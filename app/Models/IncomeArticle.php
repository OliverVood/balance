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
}
