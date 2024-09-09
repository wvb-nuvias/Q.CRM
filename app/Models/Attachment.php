<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Table: attachments
*
* === Columns ===
 * @property int $id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property int|null $incident_id
 * @property int|null $subscription_id
 * @property string|null $attachment
*/
class Attachment extends Model
{
    use HasFactory;

    /**
     * @var array
     */
    protected $fillable = ['created_at', 'updated_at', 'incident_id', 'subscription_id', 'attachment'];

    public function offer(): HasOne {
        return $this->hasOne(Offer::class);
    }

    public function customer(): HasOne {
        return $this->hasOne(Customer::class);
    }   
    
    public function invoice(): HasOne {
        return $this->hasOne(Invoice::class);
    }

    public function subscription(): HasOne {
        return $this->hasOne(Subscription::class);
    }
}
