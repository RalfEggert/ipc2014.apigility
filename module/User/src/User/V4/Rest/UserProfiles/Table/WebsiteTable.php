<?php
namespace User\V4\Rest\UserProfiles\Table;

use Zend\Db\Adapter\AdapterInterface;
use Zend\Db\ResultSet\ResultSetInterface;
use Zend\Db\TableGateway\TableGateway;

/**
 * Class WebsiteTable
 *
 * @package User\V4\Rest\UserProfiles\Table
 */
class WebsiteTable extends TableGateway
{
    /**
     * @param AdapterInterface   $adapter
     * @param ResultSetInterface $resultSetPrototype
     */
    public function __construct(
        AdapterInterface $adapter,
        ResultSetInterface $resultSetPrototype = null
    ) {
        $table = 'websites';
        parent::__construct($table, $adapter, null, $resultSetPrototype);
    }

    /**
     * @param $id
     *
     * @return array
     */
    public function fetchWebsitesById($id)
    {
        $select = $this->getSql()->select();
        $select->join('user_websites', 'website_id = id', array());
        $select->where->equalTo('user_id', $id);

        return $this->selectWith($select)->toArray();
    }
} 