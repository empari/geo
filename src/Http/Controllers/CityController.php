<?php namespace Empari\Geo\Http\Controllers;

use Empari\Geo\Repositories\Contracts\CityRepository;
use Empari\Geo\Repositories\Criteria\FindByStateCriteria;
use Empari\Laravel\Support\Http\Controllers\Controller;
use Illuminate\Http\Request;


/**
 * Class CityController
 *
 * @resource Geo
 * @package Empari\Geo\Http\Controllers
 */
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

    /**
     * Display a listing of the cities
     *
     * @return Response
     */
    public function index()
    {
        return $this->repository->paginate();
    }


    /**
     * Search cities by States
     *
     * @param Request $request
     * @param $initial
     * @return mixed
     */
    public function searchByState(Request $request, $initial)
    {
        $this->repository->pushCritreria(new FindByStateCriteria($initial));
        return $this->repository->paginate();
    }
}