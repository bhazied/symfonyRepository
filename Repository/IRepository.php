<?php
/**
 * Created by PhpStorm.
 * User: dev03
 * Date: 03/06/17
 * Time: 02:53
 */

namespace Goup\RepositoryBundle\Repository;


interface IRepository
{
    public function getAll();

    public function countAll();

    public function get($params = []);

    public function store($entity, $params= []);

    public function update($entity, $params = []);

    public function delete($idEntity);
}