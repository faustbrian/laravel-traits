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

use Stringy\StaticStringy;

/**
 * Class HasSlug.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
trait HasSlug
{
    /**
     * @var string
     */
    protected static $slugColumn = 'slug';

    /**
     * @var string
     */
    protected static $slugField = 'title';

    public static function bootHasSlug()
    {
        static::saving(function ($model) {
            $model->{static::$slugColumn} = StaticStringy::slugify($model->{static::$slugField});
        });
    }
}
