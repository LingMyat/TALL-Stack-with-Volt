<?php

namespace App\Models;

use WendellAdriel\Lift\Lift;
use Illuminate\Database\Eloquent\Model;
use WendellAdriel\Lift\Attributes\Cast;
use WendellAdriel\Lift\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use WendellAdriel\Lift\Attributes\Relations\BelongsTo;

#[BelongsTo(User::class)]
class Post extends Model
{
    use HasFactory, Lift;

    #[Cast('int')]
    public int $id;

    #[Fillable]
    #[Cast('string')]
    public string $name;

    #[Fillable]
    #[Cast('string')]
    public string $description;
}
