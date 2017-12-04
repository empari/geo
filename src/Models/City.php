<?php namespace Empari\Geo\Models;

use Empari\Geo\Support\Models\Model;

/**
 * Class City
 *
 * @property integer $id
 * @property string $name
 * @package Empari\Geo\Models
 */
class City extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cities';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'state_id',
        'name'
    ];

    /**
     * @var boolean
     */
    public $timestamps = false;

    /**
     *
     * @var boolean
     */
    public $incrementing = false;

    /**
     * return state of city
     * @return \State
     */
    public function state()
    {
        return $this->belongsTo(State::class);
    }

    /**
     * return Country of city
     *
     * @return /Country
     */
    public function country()
    {
        return $this->state->country;
    }

    /**
     * Scope a query to find by state
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param string $value
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeFindByState($query, $value)
    {
        return $query
            ->join('states', 'cities.state_id', '=', 'state.id')
            ->where('states.initials', '=', $value)
            ->orWhere('states.name', 'like', '%'. $value .'%');
    }
}