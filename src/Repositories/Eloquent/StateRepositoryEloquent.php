<?php namespace Empari\Geo\Repositories\Eloquent;

use Empari\Geo\Models\State;
use Empari\Geo\Fractal\Presenters\StatePresenter;
use Empari\Geo\Repositories\Contracts\StateRepository;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;

class StateRepositoryEloquent extends BaseRepository implements StateRepository
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
        return State::class;
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
        return StatePresenter::class;
    }
}
