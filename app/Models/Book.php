<?php

namespace App\Models;

use Database\Factories\BookFactory;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;

/**
 * App\Models\Book
 *
 * @property int $id
 * @property string $title
 * @property string|null $sub_title
 * @property int $type
 * @property int|null $series_id
 * @property float|null $seq
 * @property int $status
 * @property int|null $bookshelf_id
 * @property string|null $isbn
 * @property string $author
 * @property string $locale
 * @property string $publisher
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Bookshelf|null $bookshelf
 * @property-read Series|null $series
 * @method static BookFactory factory(...$parameters)
 * @method static Builder|Book newModelQuery()
 * @method static Builder|Book newQuery()
 * @method static Builder|Book query()
 * @method static Builder|Book whereAuthor($value)
 * @method static Builder|Book whereBookshelfId($value)
 * @method static Builder|Book whereCreatedAt($value)
 * @method static Builder|Book whereId($value)
 * @method static Builder|Book whereIsbn($value)
 * @method static Builder|Book whereLocale($value)
 * @method static Builder|Book wherePublisher($value)
 * @method static Builder|Book whereSeq($value)
 * @method static Builder|Book whereSeriesId($value)
 * @method static Builder|Book whereStatus($value)
 * @method static Builder|Book whereSubTitle($value)
 * @method static Builder|Book whereTitle($value)
 * @method static Builder|Book whereType($value)
 * @method static Builder|Book whereUpdatedAt($value)
 * @mixin Eloquent
 */
class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'sub_title',
        'type',
        'series_id',
        'seq',
        'status',
        'bookshelf_id',
        'isbn',
        'author',
        'locale',
        'publisher'
    ];

    public function series(): BelongsTo
    {
        return $this->belongsTo(Series::class);
    }

    public function bookshelf(): BelongsTo
    {
        return $this->belongsTo(Bookshelf::class);
    }
}
