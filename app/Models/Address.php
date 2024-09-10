<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * Table: addresses
*
* === Columns ===
 * @property int $id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property int|null $address_type_id
 * @property int|null $ordinal
 * @property string|null $street
 * @property string|null $number
 * @property string|null $appartement
 * @property string|null $postal
 * @property string|null $city
 * @property string|null $region
 * @property string|null $country
*/
class Address extends Model
{
    use HasFactory;

    /**
     * @var array
     */
    protected $fillable = ['created_at', 'updated_at', 'address_type_id', 'ordinal', 'street', 'number', 'appartement', 'postal', 'city', 'region', 'country'];

    /**
     * Get the addresstype for this address.
     */
    public function addresstype(): HasOne 
    {
        return $this->HasOne(QType::class)->where('context','address');
    }
}
