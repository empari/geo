<?php namespace Empari\Geo\Repositories\Eloquent;

use Empari\Geo\Models\City;
use Empari\Geo\Fractal\Presenters\CityPresenter;
use Empari\Geo\Repositories\Contracts\CityRepository;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;

class CityRepositoryEloquent extends BaseRepository implements CityRepository
{

    protected $fieldSearchable = [
        'name' => 'like',
        'state.initials' => '='
    ];

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return City::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

    public function presenter()
    {
        return CityPresenter::class;
    }
}
