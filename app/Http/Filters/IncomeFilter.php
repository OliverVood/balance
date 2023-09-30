<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;

class IncomeFilter extends AbstractFilter
{
    public const ARTICLE_ID = 'article_id';
    public const AMOUNT = 'amount';

    protected function getCallbacks(): array
    {
        return [
            self::ARTICLE_ID => [$this, 'articleId'],
            self::AMOUNT => [$this, 'amount']
        ];
    }

    public function articleId(Builder $builder, $value) {
        $builder->where('article_id', $value);
    }

    public function amount(Builder $builder, $value) {

    }
}
