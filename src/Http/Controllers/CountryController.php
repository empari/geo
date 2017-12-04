<?php namespace Empari\Geo\Http\Controllers;

use Empari\Geo\Repositories\Contracts\CountryRepository;
use Empari\Laravel\Support\Http\Controllers\Controller;

class CountryController extends Controller
{
    /**
     * @var CountryRepository
     */
    private $repository;

    public function __construct(CountryRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        return $this->repository->paginate();
    }
}