<?php
/**
 * Created by PhpStorm.
 * User: dev03
 * Date: 03/06/17
 * Time: 02:54
 */

namespace Goup\RepositoryBundle\Criteria;


use Goup\RepositoryBundle\Repository\BaseRepository;

abstract class BaseCriteria
{
    abstract public function apply($queryBuilder, BaseRepository $repository);
}