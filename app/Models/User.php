<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

use App\Models\Role;
use App\Models\Contact;
use App\Models\Email;
use App\Models\Organization;

/**
 * Table: users
*
* === Columns ===
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Carbon\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $two_factor_secret
 * @property string|null $two_factor_recovery_codes
 * @property string|null $two_factor_confirmed_at
 * @property string|null $remember_token
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property string $theme
 * @property int $role_id
 * @property int $organization_id
*
* === Relationships ===
 * @property-read \Laravel\Sanctum\PersonalAccessToken|null $tokens
 * @property-read \Illuminate\Notifications\DatabaseNotification|null $notifications
*
* === Accessors/Attributes ===
 * @property-read mixed $profilePhotoUrl
*/
class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];

    /**
     * Get the role of this user.
     */
    public function role(): BelongsTo 
    {
        return $this->belongsTo(Role::class);
    }

    /**
     * Get the contact of this user by email.
     */
    public function contact() {
        $emails=Email::where('address', '=', $this->email)->first();
        if ($emails) {
            return $emails->contact;
        }
    }

    /**
     * Get the organization of this user.
     */
    public function organization(): BelongsTo 
    {
        return $this->BelongsTo(Organization::class);
    }

    // Check if the user have the permission
    public function hasPermissionTo($permissionName)
    {
        return $this->role->permissions->contains('name', $permissionName);
    }
}
