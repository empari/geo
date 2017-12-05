<?php namespace Empari\Geo\Http\Controllers;

use Empari\Geo\Repositories\Contracts\CountryRepository;
use Empari\Laravel\Support\Http\Controllers\Controller;

/**
 * Class CountryController
 *
 * @resource Geo
 * @package Empari\Geo\Http\Controllers
 */
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

    /**
     * Display a listing of the countries
     *
     * @return Response
     */
    public function index()
    {
        return $this->repository->paginate();
    }
}