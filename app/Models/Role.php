<?php

namespace App\Models;

use App\Models\Concerns\HasAuthor;
use App\Models\Enums\Ability;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\AsEnumCollection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Role extends Model
{
    use HasFactory;

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'abilities' => AsEnumCollection::class.':'.Ability::class,
    ];

    /**
     *So whenever you create a role, its attributes the role.
    */
    public static function booted()
    {
        static ::creating(function ($role) {
            $role->attribute = Str::slug($role->name);
        });
    }

    /**
     * Special roles attributes
     */
    const SUPER_ADMIN = 'super-admin';

    public function scopeAssignable(Builder $builder)
    {
        if (user()->isSuperAdmin()) return;

        $builder->whereKey(user()->role);
    }

    public function isSuperAdmin()
    {
        return $this->attribute === self::SUPER_ADMIN;
    }

    /**
     * @return HasMany
     */
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
