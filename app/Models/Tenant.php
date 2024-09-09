<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use App\Models\Organization;

class Tenant extends Model
{
    use HasFactory;

    public function organization(): HasOne {
        return $this->hasOne(Organization::class);
    }

    public function contact(): HasOne {
        return $this->hasOne(Contact::class);
    }
}
