<?php
/**
 * Created by PhpStorm.
 * User: YOA
 * Date: 26/03/2019
 * Time: 21:33
 */

namespace App\Repositories;


use App\Models\Type;

class TypeRepository extends ResourceRepository
{
    public function __construct(Type $type)
    {
        $this->model = $type;
    }
}