<?php
/**
 * Created by PhpStorm.
 * User: dev03
 * Date: 03/06/17
 * Time: 02:57
 */

namespace Goup\RepositoryBundle\Join;


abstract class BaseJoin
{
    abstract public function apply($queryBuilder);
}