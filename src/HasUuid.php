<?php

/*
 * This file is part of Laravel Traits.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

/*
 * This file is part of Laravel Traits.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

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
