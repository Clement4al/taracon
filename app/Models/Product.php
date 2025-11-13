<?php

namespace App\Models;

use App\Models\Concerns\InteractsWithCart;
use App\Models\Concerns\HasAuthor;
use App\Models\Scopes\ProductScope;
use App\Observers\Observable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes, InteractsWithCart, HasAuthor, ProductScope, Observable;

    /**
     * The relations to eager load on every query.
     */
    protected $with = ['brand', 'image'];
    protected $guarded = [];

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function isFeatured(): bool
    {
        return (bool) $this->featured_at;
    }

    public function slug(): Attribute
    {
        return Attribute::set(fn ($value) => $value.'-'.($this->id ?? Product::max('id') + 1));
    }

    public function initialPrice(): Attribute
    {
        return Attribute::get(fn () => ($this->price / (1 - $this->discount / 100)));
    }

    public function stockValue(): Attribute
    {
        return Attribute::get(fn () => $this->stock->quantity * $this->price);
    }

    public function costValue(): Attribute
    {
        return Attribute::get(fn () => $this->stock->quantity * $this->cost_price);
    }

    public function profitValue(): Attribute
    {
        return Attribute::get(fn () => $this->stock->quantity * $this->profit);
    }

    public function profit(): Attribute
    {
        return Attribute::get(fn () => $this->price - $this->cost_price);
    }

    public function images(): HasMany
    {
        return $this->hasMany(Image::class);
    }

    public function image(): HasOne
    {
//        return $this->images()->one()->oldestOfMany();
        return $this->hasOne(Image::class)->latestOfMany();

    }

    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }

    public function orders(): BelongsToMany
    {
        return $this->belongsToMany(Order::class, OrderProduct::class)
            ->withPivot(['id', 'price', 'quantity', 'location_id'])
            ->withTimestamps();
    }

    public function subCategory(): BelongsTo
    {
        return $this->belongsTo(SubCategory::class);
    }

    public function locations(): BelongsToMany
    {
        return $this->belongsToMany(Location::class, Stock::class)
            ->withPivot(['quantity', 'created_by', 'updated_by'])
            ->as('stock')
            ->withTimestamps();
    }

    public function transfers(): BelongsToMany
    {
        return $this->belongsToMany(Transfer::class, ProductTransfer::class)->withTimestamps();
    }

    public function color(): BelongsTo
    {
        return $this->belongsTo(Color::class);
    }
}
