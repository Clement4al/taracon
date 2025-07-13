<?php

namespace App\Support;

use Illuminate\Support\Facades\Facade;

/**
 * @method static \App\Support\Cart add(\App\Models\Product $product, int $quantity = null)
 */


class CartFacade extends Facade
{
    protected static function getFacadeAccessor()
    {

        return 'cart';
    }
}
