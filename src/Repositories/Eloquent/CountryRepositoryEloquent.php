<?php namespace Empari\Geo\Repositories\Eloquent;

use Empari\Geo\Models\Country;
use Empari\Geo\Fractal\Presenters\CountryPresenter;
use Empari\Geo\Repositories\Contracts\CountryRepository;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;

class CountryRepositoryEloquent extends BaseRepository implements CountryRepository
{

    protected $fieldSearchable = [
        'name' => 'like',
    ];

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Country::class;
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
        return CountryPresenter::class;
    }
}
