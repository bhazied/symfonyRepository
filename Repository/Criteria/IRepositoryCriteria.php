<?php
/**
 * Created by PhpStorm.
 * User: dev03
 * Date: 03/06/17
 * Time: 02:55
 */

namespace Goup\RepositoryBundle\Criteria;


use Goup\RepositoryBundle\Repository\BaseRepository;

interface IRepositoryCriteria
{
    public function getByCriteria(BaseRepository $criteria);

    public function pushCriteria($criteria);

    public function getCriteria();

    public function skipCriteria($status = true);

    public function applyCriteria();

    public function resetCriteria();
}