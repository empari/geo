<?php
namespace Empari\Geo\Models;

use Empari\Geo\Support\Models\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Country
 *
 * @property integer $id
 * @property string $name
 * @package Empari\Geo\Models
 */
class Country extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'countries';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var boolean
     */
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'name'];

    /**
     * return states of country
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function states()
    {
        return $this->hasMany(State::class);
    }
}