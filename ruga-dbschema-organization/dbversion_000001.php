<?php

declare(strict_types=1);

/**
 * @return string
 * @var \Ruga\Db\Schema\Resolver $resolver
 * @var string                   $comp_name
 */
$tableName=\Ruga\Organization\OrganizationTable::TABLENAME;

return <<<"SQL"

SET FOREIGN_KEY_CHECKS = 0;
ALTER TABLE `{$tableName}` ADD COLUMN `Tenant_id` INT NULL DEFAULT NULL AFTER `date_of_dissolution`;
ALTER TABLE `{$tableName}` ADD INDEX `fk_{$tableName}_Tenant_id_idx` (`Tenant_id`);
# ALTER TABLE `{$tableName}` ADD CONSTRAINT `fk_{$tableName}_Tenant_id` FOREIGN KEY (`Tenant_id`) REFERENCES `Tenant` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
SET FOREIGN_KEY_CHECKS = 1;

SQL;
