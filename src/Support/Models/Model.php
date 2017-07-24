<?php
namespace Empari\Geo\Support\Models;

use Illuminate\Database\Eloquent\Model as Entity;

class Model extends Entity
{

    /**
     * Scope a query to only include users of a given name.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param string $value
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeFindByName($query, $value)
    {
        return $query->whereHas($this->table, function($q) use ($value) {
            $q->where('name', 'like', '%'. $value .'%');
        })->get();
    }
}