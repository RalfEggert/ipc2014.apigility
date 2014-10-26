<?php
namespace User\V4\Rest\UserProfiles;
/**
 * Class UserProfilesResourceFactory
 *
 * @package User\V4\Rest\UserProfiles\Resource
 */
class UserProfilesResourceFactory
{
    /**
     * @param $services
     *
     * @return UserProfilesResource
     */
    public function __invoke($services)
    {
        $userTable    = $services->get(
            'User\\V4\\Rest\\UserProfiles\\Table\\UserTable'
        );
        $websiteTable = $services->get(
            'User\\V4\\Rest\\UserProfiles\\Table\\WebsiteTable'
        );
        $resource     = new UserProfilesResource();
        $resource->setUserTable($userTable);
        $resource->setWebsiteTable($websiteTable);

        return $resource;
    }
}