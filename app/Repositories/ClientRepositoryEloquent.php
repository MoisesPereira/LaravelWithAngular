<?php
/**
 * Created by PhpStorm.
 * User: moises
 * Date: 19/08/15
 * Time: 22:21
 */

namespace App\Repositories;


use App\Entities\Client;
use Prettus\Repository\Eloquent\BaseRepository;

class ClientRepositoryEloquent extends BaseRepository implements ClientRepository
{

        public function model()
        {
            return Client::class;
        }
}