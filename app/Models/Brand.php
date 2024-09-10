<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;


/**
 * Table: brands
*
* === Columns ===
 * @property int $id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property string|null $name
*/
class Brand extends Model
{
    //TODO if model is created, get the resources for the brand (icon, smallicon, svg icon)

    use HasFactory;

    /**
     * @var array
     */
    protected $fillable = ['created_at', 'updated_at', 'name'];

    /**
     * Get the products that have this brand.
     */
    public function products(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

}
