<?php namespace Empari\Geo\Http\Controllers;

use Empari\Geo\Repositories\Contracts\StateRepository;
use Empari\Laravel\Support\Http\Controllers\Controller;

/**
 * Class StateController
 *
 * @resource Geo
 * @package Empari\Geo\Http\Controllers
 */
class StateController extends Controller
{
    /**
     * @var StateRepository
     */
    private $repository;

    public function __construct(StateRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the states
     *
     * @return Response
     */
    public function index()
    {
        return $this->repository->paginate();
    }
}