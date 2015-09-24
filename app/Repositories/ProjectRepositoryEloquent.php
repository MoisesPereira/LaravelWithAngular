<?php
/**
 * Created by PhpStorm.
 * User: moises
 * Date: 01/09/15
 * Time: 20:16
 */

namespace app\Repositories;

use App\Entities\Project;
use Prettus\Repository\Eloquent\BaseRepository;

class ProjectRepositoryEloquent extends BaseRepository implements ProjectRepository
{

    public function model()
    {
        return Project::class;
    }
}