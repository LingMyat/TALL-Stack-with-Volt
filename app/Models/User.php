<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use WendellAdriel\Lift\Lift;
use Laravel\Sanctum\HasApiTokens;
use WendellAdriel\Lift\Attributes\Cast;
use Illuminate\Notifications\Notifiable;
use WendellAdriel\Lift\Attributes\Hidden;
use WendellAdriel\Lift\Attributes\Fillable;
use WendellAdriel\Lift\Attributes\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

#[HasMany(Chirp::class)]
#[HasMany(Post::class)]
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, Lift;

    #[Fillable]
    public string $name;

    #[Fillable]
    public string $email;

    #[Hidden]
    #[Fillable]
    #[Cast('hashed')]
    public string $password;

    #[Cast('datetime')]
    public $email_verified_at;

    #[Hidden]
    public $remember_token;

}
