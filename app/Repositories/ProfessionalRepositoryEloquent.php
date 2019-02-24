<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\ProfessionalRepository;
use App\Entities\Professional;
use App\Validators\ProfessionalValidator;

/**
 * Class ProfessionalRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class ProfessionalRepositoryEloquent extends BaseRepository implements ProfessionalRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Professional::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
