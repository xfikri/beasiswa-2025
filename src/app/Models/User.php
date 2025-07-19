<?php

namespace App\Models;

<<<<<<< HEAD
=======
// use Illuminate\Contracts\Auth\MustVerifyEmail;
>>>>>>> a177b77b51ced4dea59030394a0f02ef4fac2128
use Filament\Models\Contracts\FilamentUser;
use Filament\Models\Contracts\HasAvatar;
use Filament\Panel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements FilamentUser, HasAvatar
{
<<<<<<< HEAD
    use HasFactory, HasRoles, Notifiable;
=======
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory,HasRoles, Notifiable;
>>>>>>> a177b77b51ced4dea59030394a0f02ef4fac2128

    /**
     * The attributes that are mass assignable.
     *
<<<<<<< HEAD
     * @var array<int, string>
=======
     * @var list<string>
>>>>>>> a177b77b51ced4dea59030394a0f02ef4fac2128
     */
    protected $fillable = [
        'avatar_url',
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
<<<<<<< HEAD
     * @var array<int, string>
=======
     * @var list<string>
>>>>>>> a177b77b51ced4dea59030394a0f02ef4fac2128
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
<<<<<<< HEAD
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    /**
     * Get the Filament avatar URL.
     */
    public function getFilamentAvatarUrl(): ?string
    {
        return $this->avatar_url
            ? asset('storage/' . $this->avatar_url)
            : 'https://www.gravatar.com/avatar/' . md5(strtolower(trim($this->email))) . '?d=mp&r=g&s=250';
    }

    /**
     * Determine if the user can access the Filament panel.
     */
    public function canAccessPanel(Panel $panel): bool
    {
        // Bisa diatur role-based check di sini misalnya:
        // return $this->hasRole('admin');

        return true; // Default: semua user bisa akses
=======
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function getFilamentAvatarUrl(): ?string
    {
        if ($this->avatar_url) {
            return asset('storage/' . $this->avatar_url);
        } else {
            $hash = md5(strtolower(trim($this->email)));

            return 'https://www.gravatar.com/avatar/' . $hash . '?d=mp&r=g&s=250';
        }
    }

    public function canAccessPanel(Panel $panel): bool
    {
        return true;
>>>>>>> a177b77b51ced4dea59030394a0f02ef4fac2128
    }
}
