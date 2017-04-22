<?php



declare(strict_types=1);

namespace BrianFaust\Traits;

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
