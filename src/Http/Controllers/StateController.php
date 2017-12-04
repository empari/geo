<?php namespace Empari\Geo\Http\Controllers;

use Empari\Geo\Repositories\Contracts\StateRepository;
use Empari\Laravel\Support\Http\Controllers\Controller;

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

    public function index()
    {
        return $this->repository->paginate();
    }
}