<?php

namespace App\Models\Concerns;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

trait HasAuthor
{
    public static function bootHasAuthor(): void
    {
        static::creating(function(Model $model) {
            $model->created_by = Auth::id();
        });

        static::updating(function(Model $model) {
            $model->updated_by = Auth::id();
        });

        static::deleting(function(Model $model) {
            if (in_array(SoftDeletes::class, class_uses($model))) {
                $model->updated_by = Auth::id();
                $model->save();
            }
        });
    }

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by')->withTrashed();
    }

    public function editor(): BelongsTo
    {
        return $this->belongsTo(User::class, 'updated_by')->withTrashed();
    }
}
