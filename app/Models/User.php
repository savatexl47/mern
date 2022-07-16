<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
//use Filament\Models\Contracts\FilamentUser;
use Filament\Models\Contracts\HasAvatar;
use Filament\Models\Contracts\HasName;
use Illuminate\Support\Facades\Storage;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements HasName, HasAvatar
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'imagen',
        'email',
        'password',
        'estado',
        'nombre',
        'apellido',
        'direccion',
        'tipo',
        'dni',
        'sexo',
        'edad', 
        'movil',
        'fecha_nacimiento',
        'nro_cuenta',
        'banco',
        'cci',
        'fecha_voucher',
        'sueño',
        'voucher',
        'declaju',
        'foto_dni',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'estado' => 'boolean',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getFilamentName(): string
    {
        return "{$this->nombre} {$this->apellido}";
    }
    public function getFilamentAvatarUrl(): ?string
    {
         return Storage::url($this->imagen);
    }
}
