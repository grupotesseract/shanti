<?php

namespace App\Repositories;

use App\Models\InfoHomepage;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class InfoHomepageRepository
 * @package App\Repositories
 * @version September 21, 2018, 9:54 pm BRT
 *
 * @method InfoHomepage findWithoutFail($id, $columns = ['*'])
 * @method InfoHomepage find($id, $columns = ['*'])
 * @method InfoHomepage first($columns = ['*'])
*/
class InfoHomepageRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return InfoHomepage::class;
    }
}
