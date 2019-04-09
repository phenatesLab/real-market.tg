<?php
/**
 * Created by PhpStorm.
 * User: YOA
 * Date: 26/03/2019
 * Time: 12:36
 */

namespace App\Repositories;


use App\Models\Property;

class PropertyRepository extends ResourceRepository
{
    public function __construct(Property $property)
    {
        parent::__construct($property);
    }

    public function getAllVisible()
    {
        return $this->model->where('sold', false)->get();
    }

    public function getAllVisiblePaginated(int $nbrPerPage)
    {
        return $this->model->where('sold', false)->paginate($nbrPerPage);
    }
}