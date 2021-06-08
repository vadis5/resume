<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Support\Carbon;

/**
 * App\Models\Module
 *
 * @property int                         $id
 * @property string                      $name
 * @property int|null                    $order
 * @property int                         $widget_type_id
 * @property int                         $specific_id
 * @property int|null                    $previous_id
 * @property Carbon|null                 $created_at
 * @property Carbon|null                 $updated_at
 * @property-read WidgetType             $widgetType
 * @property-read Collection|Completed[] $completed
 * @property-read int|null               $completed_count
 * @method static Builder|Module whereCreatedAt($value)
 * @method static Builder|Module whereId($value)
 * @method static Builder|Module whereName($value)
 * @method static Builder|Module whereOrder($value)
 * @method static Builder|Module wherePreviousId($value)
 * @method static Builder|Module whereSpecificId($value)
 * @method static Builder|Module whereUpdatedAt($value)
 * @method static Builder|Module whereWidgetTypeId($value)
 * @method static Builder|Module newModelQuery()
 * @method static Builder|Module newQuery()
 * @method static Builder|Module query()
 * @mixin \Eloquent
 */
class Module extends Model
{
    use HasFactory;

    protected $table = 'modules';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'order',
        'widget_type_id',
        'specific_id',
        'previous_id',
        'created_at',
        'updated_at'
    ];

    /**
     * @return BelongsTo
     */
    public function widgetType(): BelongsTo
    {
        return $this->belongsTo(
            WidgetType::class,
            'widget_type_id',
            'id'
        );
    }

    /**
     * @return MorphMany
     */
    public function completed(): MorphMany
    {
        return $this->morphMany(Completed::class, 'completable');
    }
}
