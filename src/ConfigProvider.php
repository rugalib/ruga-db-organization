<?php

declare(strict_types=1);

namespace Ruga\Organization;

use Ruga\Db\Schema\Updater;
use Ruga\Organization\Container\OrganizationTableFactory;

class ConfigProvider
{
    public function __invoke()
    {
        return [
            'db' => [
                Updater::class => [
                    'components' => [
                        Organization::class => [
                            Updater::CONF_REQUESTED_VERSION => 2,
                            Updater::CONF_SCHEMA_DIRECTORY => __DIR__ . '/../ruga-dbschema-organization',
                        ],
                    ],
                ],
            ],
            'dependencies' => [
                'factories' => [
                    OrganizationTable::class => OrganizationTableFactory::class,
                ],
            ],
        ];
    }
}