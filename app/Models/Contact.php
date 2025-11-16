<?php

namespace App\Models;

use App\Models\Scopes\AllowedFilterSearch;
use App\Models\Scopes\AllowedSort;
use App\Models\Scopes\SimpleSoftDeletes;
use App\Models\Scopes\SimpleSoftDeletingScope;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
    use HasFactory, SoftDeletes, AllowedFilterSearch, AllowedSort;

    protected $fillable = [
        "first_name",
        "last_name",
        "phone",
        "email",
        "address",
        "company_id"
    ];

    public function company(): BelongsTo {
        return $this->belongsTo(Company::class)->withTrashed();
    }

    public function user(): BelongsTo {
        return $this->BelongsTo(User::class);
    }

    public function tasks(): HasMany {
        return $this->hasMany(Task::class);
    }

}
