<?php
/**
 * Created by PhpStorm.
 * User: dev03
 * Date: 03/06/17
 * Time: 02:57
 */

namespace Goup\RepositoryBundle\Join;


interface IRepositoryJoin
{
    public function pushJoin($join);

    public function getJoin();

    public function resetJoin();

    public function applyJoin();

    public function skipJoin($status = false);
}