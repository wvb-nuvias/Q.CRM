<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Offer extends Model
{
    use HasFactory;

    public function attachments(): HasMany {
        return $this->hasMany(Attachment::class);
    }

    public function lines(): HasMany {
        return $this->hasMany(OfferLine::class);
    }


}
