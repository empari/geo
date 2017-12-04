<?php namespace Empari\Geo\Repositories\Criteria;

use Prettus\Repository\Contracts\CriteriaInterface;
use Prettus\Repository\Contracts\RepositoryInterface;

class FindByStateCriteria implements CriteriaInterface
{
    /**
     * @var null
     */
    private $initials;

    /**
     * FindByTenantActiveCriteria constructor.
     * @param null $initials
     * @internal param null $initial
     */
    public function __construct($initials = null)
    {
        $this->initials = $initials;
    }

    /**
     * Apply criteria in query repository
     *
     * @param                     $model
     * @param RepositoryInterface $repository
     *
     * @return mixed
     */
    public function apply($model, RepositoryInterface $repository)
    {
        return $model
                ->join('states', 'cities.state_id', '=', 'state.id')
                ->where('states.initials', '=', $this->initials);
    }
}