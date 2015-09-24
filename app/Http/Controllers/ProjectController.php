<?php
/**
 * Created by PhpStorm.
 * User: moises
 * Date: 01/09/15
 * Time: 20:41
 */

namespace App\Http\Controllers;

use App\Repositories\ProjectRepository;
use App\Services\ProjectService;
use Illuminate\Http\Request;


class ProjectController extends Controller
{

    /**
     * @param ProjectRepository $repository
     * @param ProjectService $service
     */
    private $repository;

    private $service;


     public function __construct(ProjectRepository $repository, ProjectService $service)
    {
        $this->repository = $repository;

        $this->service = $service;
    }

    public function index(ProjectRepository $repository)
    {
        return $this->repository->all();
    }

}