<?php namespace Empari\Geo\Http\Controllers;

use Empari\Geo\Repositories\Contracts\CityRepository;
use Empari\Geo\Repositories\Criteria\FindByStateCriteria;
use Empari\Laravel\Support\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * @var CityRepository
     */
    private $repository;

    public function __construct(CityRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        return $this->repository->paginate();
    }

    public function searchByState(Request $request, $initial)
    {
        $this->repository->pushCritreria(new FindByStateCriteria($initial));
        return $this->repository->paginate();
    }
}