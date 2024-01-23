<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vrs extends Model implements Authenticatable
{
    use HasFactory, AuthenticableTrait;

    protected $table = 'vrs'; 
    protected $redirectTo = '/home';
    protected $username = 'email';

    protected $guard = 'web';

    protected $maxAttempts = 5;
    protected $decayMinutes = 1;
    protected $fillable = [
        'name', 'email', 'password', 'image',
    ];
}
