<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\EstablishmentRepository;
use App\Entities\Establishment;
use App\Validators\EstablishmentValidator;

/**
 * Class EstablishmentRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class EstablishmentRepositoryEloquent extends BaseRepository implements EstablishmentRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Establishment::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
