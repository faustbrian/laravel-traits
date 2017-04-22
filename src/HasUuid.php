<?php



declare(strict_types=1);

namespace BrianFaust\Traits;

use Rhumsaa\Uuid\Uuid;

trait HasUuid
{
    protected static $uuidColumn = 'uuid';

    public static function bootHasUuid()
    {
        static::creating(function ($model) {
            $model->{static::$uuidColumn} = Uuid::uuid4();
        });
    }
}
