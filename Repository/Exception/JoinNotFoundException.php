<?php
namespace Goup\RepositoryBundle\Repository\Exception;

use Symfony\Component\Debug\Exception\ClassNotFoundException;

/**
 * Created by PhpStorm.
 * User: dev03
 * Date: 16/05/17
 * Time: 10:01
 */
class JoinNotFoundException extends ClassNotFoundException
{
    public function __construct($message, \ErrorException $previous)
    {
        parent::__construct($message, $previous);
    }
}
