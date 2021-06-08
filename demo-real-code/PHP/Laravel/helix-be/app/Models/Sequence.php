<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Support\Carbon;

/**
 * App\Models\Sequence
 *
 * @property-read Collection|Module[]    $modules
 * @property-read int|null               $modules_count
 * @property-read SequenceType           $sequenceType
 * @property-read Collection|Completed[] $completed
 * @property-read int|null               $completed_count
 * @property int                         $id
 * @property int                         $type_id
 * @property Carbon|null                 $created_at
 * @property Carbon|null                 $updated_at
 * @method static Builder|Sequence newModelQuery()
 * @method static Builder|Sequence newQuery()
 * @method static Builder|Sequence query()
 * @method static Builder|Sequence whereCreatedAt($value)
 * @method static Builder|Sequence whereId($value)
 * @method static Builder|Sequence whereTypeId($value)
 * @method static Builder|Sequence whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Sequence extends Model
{
    use HasFactory;

    protected $table = 'sequences';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'type_id',
        'created_at',
        'updated_at'
    ];

    /**
     * @return BelongsTo
     */
    public function sequenceType(): BelongsTo
    {
        return $this->belongsTo(
            SequenceType::class,
            'type_id',
            'id'
        );
    }

    public function modules(): BelongsToMany
    {
        return $this->belongsToMany('App\Models\Module', 'module_sequences')
            ->withTimestamps();
    }

    /**
     * @return MorphMany
     */
    public function completed(): MorphMany
    {
        return $this->morphMany(Completed::class, 'completable');
    }
}
