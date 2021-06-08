<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Support\Carbon;

/**
 * App\Models\Completed
 *
 * @property int                  $id
 * @property int                  $user_id
 * @property int                  $completedable_id
 * @property string               $completedable_type
 * @property Carbon|null          $created_at
 * @property Carbon|null          $updated_at
 * @property-read Model|\Eloquent $completable
 * @method static Builder|Completed newModelQuery()
 * @method static Builder|Completed newQuery()
 * @method static Builder|Completed query()
 * @method static Builder|Completed whereUserId($value)
 * @method static Builder|Completed whereCompletedableId($value)
 * @method static Builder|Completed whereCompletedableType($value)
 * @method static Builder|Completed whereCreatedAt($value)
 * @method static Builder|Completed whereId($value)
 * @method static Builder|Completed whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Completed extends Model
{
    use HasFactory;

    protected $table = 'completed';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'completedable_id',
        'completedable_type',
        'created_at',
        'updated_at'
    ];

    public function completedable(): MorphTo
    {
        return $this->morphTo();
    }
}
