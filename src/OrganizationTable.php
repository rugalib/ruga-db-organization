<?php

declare(strict_types=1);

namespace Ruga\Organization;

/**
 * The organization table.
 *
 * @author   Roland Rusch, easy-smart solution GmbH <roland.rusch@easy-smart.ch>
 */
class OrganizationTable extends AbstractOrganizationTable
{
    const TABLENAME = 'Organization';
    const PRIMARYKEY = ['id'];
//    const RESULTSETCLASS = ;
    const ROWCLASS = Organization::class;
}
