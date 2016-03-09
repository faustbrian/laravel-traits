<?php

/*
 * This file is part of Laravel Traits.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\Traits;

/**
 * Class HasHashid.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
trait HasHashid
{
    /**
     * @var string
     */
    protected static $hashidColumn = 'hashid';

    public static function bootHasHashid()
    {
        static::creating(function ($model) {
            $model->{static::$hashidColumn} = generate_hashid();
        });
    }
}
