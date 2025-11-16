<?php

namespace App\Models;

use App\Models\Scopes\AllowedFilterSearch;
use App\Models\Scopes\AllowedSort;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use HasFactory, SoftDeletes, AllowedFilterSearch, AllowedSort;

    protected $fillable = [
        "name",
        "email",
        "address",
        "website"
    ];

    public function contacts(): HasMany {
        return $this->hasMany(Contact::class);
    }

    public function user(): BelongsTo {
        return $this->BelongsTo(User::class);
    }

}
