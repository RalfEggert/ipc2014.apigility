<?php
namespace User\V3\Rest\UserProfiles\Table;

use Zend\Db\ResultSet\ResultSet;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Class WebsiteTableFactory
 *
 * @package User\V3\Rest\UserProfiles\Table
 */
class WebsiteTableFactory implements FactoryInterface
{
    /**
     * Create service
     *
     * @param ServiceLocatorInterface $serviceLocator
     *
     * @return mixed
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $dbAdapter = $serviceLocator->get('MysqlAdapter');
        $resultSet = new ResultSet(ResultSet::TYPE_ARRAY);
        $table     = new WebsiteTable($dbAdapter, $resultSet);

        return $table;
    }
} 