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

use Stringy\StaticStringy;

trait HasSlug
{
    protected static $slugColumn = 'slug';

    protected static $slugField = 'title';

    public static function bootHasSlug()
    {
        static::saving(function ($model) {
            $model->{static::$slugColumn} = StaticStringy::slugify($model->{static::$slugField});
        });
    }
}
