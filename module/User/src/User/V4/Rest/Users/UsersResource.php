<?php
/**
 * ipc2014.apigility
 */
namespace User\V4\Rest\Users;

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

    protected function retrieveData($data)
    {
        $filter = $this->getInputFilter();

        if (null !== $filter) {
            $data = $filter->getValues();
        } else {
            $data = (array) $data;
        }

        $image = $filter->getValue('image');

        $imagePath = '/img/uploads/' . md5(serialize($data)) . '.jpg';
        $fullPath  = APPLICATION_PATH . '/public' . $imagePath;

        copy(APPLICATION_PATH . '/' . $image['tmp_name'], $fullPath);
        unlink(APPLICATION_PATH . '/' . $image['tmp_name']);

        $data['image'] = $imagePath;

        return $data;
    }
}