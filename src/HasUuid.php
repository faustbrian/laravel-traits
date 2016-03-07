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

use Rhumsaa\Uuid\Uuid;

/**
 * Class HasUuid.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
trait HasUuid
{
    /**
     * @var string
     */
    protected static $uuidColumn = 'uuid';

    /**
     *
     */
    public static function bootHasUuid()
    {
        static::creating(function ($model) {
            $model->{static::$uuidColumn} = Uuid::uuid4();
        });
    }
}
