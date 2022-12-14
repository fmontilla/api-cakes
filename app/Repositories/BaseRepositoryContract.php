<?php

namespace App\Repositories;


interface BaseRepositoryContract
{
    public function getById(int $id);
    public function all();
    public function paginate();
    public function getByAttribute(string $field, string $attribute);
    public function store(array $data);
    public function updateById(array $data, int $id);
    public function delete(int $id) ;
    public function getWithRelation(string $relation);
    public function getByIdAndWithRelations(int $id, array $relations);

}
