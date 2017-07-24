<?php
namespace Empari\Geo\Models;

use Empari\Geo\Support\Models\Model;

/**
 * Class State
 *
 * @property integer $id
 * @property string $name
 * @property string initials
 * @package Empari\Geo\Models
 */
class State extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'states';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'country_id', 'name', 'initials'];

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
     * return country of state
     * @return \Country
     */
    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    /**
     * return cities of state
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function cities()
    {
        return $this->hasMany(City::class);
    }
}