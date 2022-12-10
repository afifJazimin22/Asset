<?php

namespace App\Traits;
use Illuminate\Support\Str;

trait UUID
{
    protected static function bootUUID()
    {

        static::creating(function ($model) {
            if (empty($model -> {$model-> getKeyName()})) {
                $model->{$model->getKeyName()} = Str::uuid();
            }
        });
    }
}