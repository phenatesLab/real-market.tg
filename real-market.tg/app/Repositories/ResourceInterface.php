<?php
/**
 * Created by PhpStorm.
 * User: YOA
 * Date: 26/03/2019
 * Time: 12:30
 */

namespace App\Repositories;


interface ResourceInterface
{
    public function getAll();
    public function getPaginated (int $nbrPerPage);
    public function store (array $validated);
    public function getById(int $id);
    public function update(int $id, array $validated);
    public function destroy(int $id);
}