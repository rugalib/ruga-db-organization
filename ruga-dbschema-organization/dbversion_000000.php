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
CREATE TABLE `{$tableName}` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `fullname` VARCHAR(255) NULL,
  `name` VARCHAR(255) NULL DEFAULT NULL,
  `org_type` ENUM('LEGAL', 'INFORMAL') NOT NULL DEFAULT 'LEGAL',
  `org_subtype` VARCHAR(255) NULL DEFAULT NULL,
  `date_of_establishment` DATE NULL DEFAULT NULL,
  `date_of_dissolution` DATE NULL DEFAULT NULL,
  `remark` TEXT NULL,
  `created` DATETIME NULL,
  `createdBy` INT NULL,
  `changed` DATETIME NULL,
  `changedBy` INT NULL,
  PRIMARY KEY (`id`),
  INDEX `{$tableName}_fullname_idx` (`fullname`),
  INDEX `fk_{$tableName}_changedBy_idx` (`changedBy` ASC),
  INDEX `fk_{$tableName}_createdBy_idx` (`createdBy` ASC),
  CONSTRAINT `fk_{$tableName}_changedBy` FOREIGN KEY (`changedBy`) REFERENCES `User` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `fk_{$tableName}_createdBy` FOREIGN KEY (`createdBy`) REFERENCES `User` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
)
ENGINE=InnoDB
;
SET FOREIGN_KEY_CHECKS = 1;

SQL;
