<?php

namespace App\Models;

use Database\Factories\SeriesFactory;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;

/**
 * App\Models\Series
 *
 * @property int $id
 * @property string $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Collection|Book[] $book
 * @property-read int|null $book_count
 * @method static SeriesFactory factory(...$parameters)
 * @method static Builder|Series newModelQuery()
 * @method static Builder|Series newQuery()
 * @method static Builder|Series query()
 * @method static Builder|Series whereCreatedAt($value)
 * @method static Builder|Series whereId($value)
 * @method static Builder|Series whereName($value)
 * @method static Builder|Series whereUpdatedAt($value)
 * @mixin Eloquent
 */
class Series extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function book(): HasMany
    {
        return $this->hasMany(Book::class);
    }
}
