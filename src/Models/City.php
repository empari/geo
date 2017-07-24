<?php
namespace Empari\Geo\Models;

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
}