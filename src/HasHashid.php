<?php

namespace DraperStudio\Traits;

trait HasHashid
{
    protected static $hashidColumn = 'hashid';

    public static function bootHasHashid()
    {
        static::creating(function ($model) {
            $model->{static::$hashidColumn} = generate_hashid();
        });
    }
}
