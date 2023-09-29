<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Address;
use App\Models\ContactType;
use App\Models\Customer;
use App\Models\Email;
use App\Models\Job;
use App\Models\Phone;

/**
 * Table: contacts
*
* === Columns ===
 * @property int $id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property int|null $customer_id
 * @property int|null $contact_type_id
 * @property int|null $job_id
 * @property string|null $lastname
 * @property string|null $firstname
*/
class Contact extends Model
{
    use HasFactory;

    /**
     * @var array
     */
    protected $fillable = ['created_at', 'updated_at', 'customer_id', 'contact_type_id', 'job_id', 'lastname', 'firstname'];

    /**
     * Get the addresses for the contact.
     */
    public function addresses(): HasMany
    {
        return $this->hasMany(Address::class);
    }
    
    /**
     * Get the contacttype for this contact.
     */
    public function contacttype(): HasOne 
    {
        return $this->HasOne(ContactType::class);
    }

    /**
     * Get the customer for this contact.
     */
    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }

    /**
     * Get the emails for the contact.
     */
    public function emails(): HasMany
    {
        return $this->hasMany(Email::class);
    }

    /**
     * Get the job of this contact.
     */
    public function job(): HasOne 
    {
        return $this->HasOne(Job::class);
    }

    /**
     * Get the phones for the contact.
     */
    public function phones(): HasMany
    {
        return $this->hasMany(Phone::class);
    }   
}
