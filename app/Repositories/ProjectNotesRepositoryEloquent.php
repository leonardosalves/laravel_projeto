<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\ProjectNotesRepository;
use App\Entities\ProjectNotes;
use App\Validators\ProjectNotesValidator;

/**
 * Class ProjectNotesRepositoryEloquent
 * @package namespace App\Repositories;
 */
class ProjectNotesRepositoryEloquent extends BaseRepository implements ProjectNotesRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return ProjectNotes::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
