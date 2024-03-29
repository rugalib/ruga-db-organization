<?php
/*
 * SPDX-FileCopyrightText: 2023 Roland Rusch, easy-smart solution GmbH <roland.rusch@easy-smart.ch>
 * SPDX-License-Identifier: AGPL-3.0-only
 */

declare(strict_types=1);

namespace Ruga\Organization\Container;

use Psr\Container\ContainerInterface;
use Ruga\Db\Adapter\Adapter;
use Ruga\Organization\AbstractOrganizationTable;
use Ruga\Organization\OrganizationTable;

class OrganizationTableFactory
{
    public function __invoke(ContainerInterface $container): AbstractOrganizationTable
    {
        return new OrganizationTable($container->get(Adapter::class));
    }
}