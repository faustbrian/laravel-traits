<?php

/*
 * This file is part of Laravel Traits.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

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
