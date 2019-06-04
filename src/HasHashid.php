<?php

declare(strict_types=1);

/*
 * This file is part of Laravel Traits.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Artisanry\Traits;

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
