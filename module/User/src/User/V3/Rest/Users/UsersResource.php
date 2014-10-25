<?php
/**
 * ipc2014.apigility
 */
namespace User\V3\Rest\Users;

use Zend\Paginator\Adapter\DbTableGateway;
use ZF\Apigility\DbConnectedResource;

class UsersResource extends DbConnectedResource
{
    public function fetchAll($data = array())
    {
        $where = isset($data['filter']) ? $data['filter'] : array();
        $order = isset($data['sort']) ? $data['sort'] : array();

        $adapter = new DbTableGateway($this->table, $where, $order);

        return new $this->collectionClass($adapter);
    }
} 