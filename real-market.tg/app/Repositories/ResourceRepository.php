<?php
/**
 * Created by PhpStorm.
 * User: YOA
 * Date: 26/03/2019
 * Time: 12:32
 */

namespace App\Repositories;


class ResourceRepository implements ResourceInterface
{
    protected $model;

    public function __construct($model)
    {
        $this->model = $model;
    }
    public function getAll()
    {
        return $this->model->all();
    }

    public function getPaginated(int $nbrPerPage)
    {
        return $this->model->paginate($nbrPerPage);
    }

    public function store(array $validated)
    {
        return $this->model->create($validated);
    }

    public function getById(int $id)
    {
        return $this->model->findOrFail($id);
    }

    public function update(int $id, array $validated)
    {
        $this->getById($id)->update($validated);
    }

    public function destroy(int $id)
    {
        $this->getById($id)->delete();
    }
}