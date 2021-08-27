<?php

namespace App\Models;

use Database\Factories\BookshelfFactory;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;

/**
 * App\Models\Bookshelf
 *
 * @property int $id
 * @property string $name
 * @property string $location
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Collection|Book[] $book
 * @property-read int|null $book_count
 * @method static BookshelfFactory factory(...$parameters)
 * @method static Builder|Bookshelf newModelQuery()
 * @method static Builder|Bookshelf newQuery()
 * @method static Builder|Bookshelf query()
 * @method static Builder|Bookshelf whereCreatedAt($value)
 * @method static Builder|Bookshelf whereId($value)
 * @method static Builder|Bookshelf whereLocation($value)
 * @method static Builder|Bookshelf whereName($value)
 * @method static Builder|Bookshelf whereUpdatedAt($value)
 * @mixin Eloquent
 */
class Bookshelf extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'location',
    ];

    public function book(): HasMany
    {
        return $this->hasMany(Book::class);
    }
}
