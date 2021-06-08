<?php

/**
 * Course Model
 *
 * PHP version 7.4
 *
 * @category Models
 * @package  App\Models
 * @author   Vadiasov Volodymyr <vadiasov.volodymyr@gmail.com>
 * @license  BSD License
 * @link     App\Models
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Support\Carbon;

/**
 * App\Models\Course
 *
 * @category Class
 * @package  App\Models
 * @author   Vadiasov Volodymyr <vadiasov.volodymyr@gmail.com>
 * @license  BSD License
 * @link     App\Models
 * @property int                              $id
 * @property string                           $status
 * @property string                           $name
 * @property int                              $department_id
 * @property string|null                      $author
 * @property string|null                      $thumb
 * @property string|null                      $description
 * @property int                              $likes
 * @property string                           $length_unit
 * @property int                              $length
 * @property int                              $offline
 * @property int                              $mood_tracker
 * @property int                              $feedback
 * @property Carbon|null                      $created_at
 * @property Carbon|null                      $updated_at
 * @property int|null                         $sequence_id
 * @property int|null                         $o_sequence_id
 * @property-read Collection|Category[]       $categories
 * @property-read int|null                    $categories_count
 * @property-read Collection|Category[]       $tags
 * @property-read int|null                    $tags_count
 * @property-read Collection|Category[]       $tenants
 * @property-read int|null                    $tenants_count
 * @property-read Collection|Completed[]      $completed
 * @property-read int|null                    $completed_count
 * @property-read Collection|ModuleSequence[] $modules
 * @property-read int|null                    $modules_count
 * @property-read Sequence|null               $sentence
 * @method static Builder|Course newModelQuery()
 * @method static Builder|Course newQuery()
 * @method static Builder|Course query()
 * @method static Builder|Course whereCreatedAt($value)
 * @method static Builder|Course whereFeedback($value)
 * @method static Builder|Course whereId($value)
 * @method static Builder|Course whereLength($value)
 * @method static Builder|Course whereLengthUnit($value)
 * @method static Builder|Course whereMoodTracker($value)
 * @method static Builder|Course whereName($value)
 * @method static Builder|Course whereOffline($value)
 * @method static Builder|Course whereStatus($value)
 * @method static Builder|Course whereUpdatedAt($value)
 * @method static Builder|Course whereAuthor($value)
 * @method static Builder|Course whereDepartmentId($value)
 * @method static Builder|Course whereDescription($value)
 * @method static Builder|Course whereLikes($value)
 * @method static Builder|Course whereThumb($value)
 * @method static Builder|Course whereOSequenceId($value)
 * @method static Builder|Course whereSequenceId($value)
 * @mixin \Eloquent
 */
class Course extends Model
{
    use HasFactory;

    protected $table = 'courses';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'status',
        'name',
        'department_id',
        'author',
        'thumb',
        'description',
        'length_unit',
        'length',
        'offline',
        'mood_tracker',
        'feedback',
        'created_at',
        'updated_at'
    ];

    /**
     * The categories that belong to the course
     */
    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(
            'App\Models\Category',
            'course_categories'
        );
    }

    /**
     * The tags that belong to the course
     */
    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(
            'App\Models\Tag',
            'course_tags'
        );
    }

    /**
     * The tenants that belong to the course
     */
    public function tenants(): BelongsToMany
    {
        return $this->belongsToMany(
            'App\Models\Company',
            'tenant_courses',
            'tenant_id'
        );
    }

    /**
     * The sentence that belong to the course
     */
    public function sentence(): HasOne
    {
        return $this->hasOne(
            'App\Models\Sequence',
            'sequence_id'
        );
    }

    public function modules(): HasMany
    {
        return $this->hasMany(
            ModuleSequence::class,
            'sequence_id',
            'sequence_id'
        );
    }

    /**
     * @return MorphMany
     */
    public function completed(): MorphMany
    {
        return $this->morphMany(Completed::class, 'completedable');
    }
}
