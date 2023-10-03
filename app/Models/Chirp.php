<?php

namespace App\Models;

use App\Events\ChirpCreated;
use WendellAdriel\Lift\Lift;
use Illuminate\Database\Eloquent\Model;
use WendellAdriel\Lift\Attributes\Cast;
use WendellAdriel\Lift\Attributes\Fillable;
use WendellAdriel\Lift\Attributes\Events\Dispatches;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use WendellAdriel\Lift\Attributes\Relations\BelongsTo;

#[Dispatches(ChirpCreated::class, 'created')]
#[BelongsTo(User::class)]
class Chirp extends Model
{
    use HasFactory, Lift;

    #[Cast('int')]
    public int $id;

    #[Fillable]
    #[Cast('string')]
    public string $message;

}
