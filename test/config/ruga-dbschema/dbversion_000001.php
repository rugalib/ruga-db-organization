<?php

return <<<'SQL'

SET FOREIGN_KEY_CHECKS = 0;
INSERT INTO `User` (`id`, `username`, `password`, `fullname`, `email`, `mobile`, `role`, `created`, `createdBy`, `changed`, `changedBy`) VALUES
 ('1', 'SYSTEM', null, 'SYSTEM', null, null, 'system', NOW(), '1', NOW(), '1')
,('2', 'GUEST', null, 'GUEST', null, null, 'guest', NOW(), '1', NOW(), '1')
,('3', 'admin', '$2y$10$CNIWWxUHD8SyLPPTzrDmxOi6wuer1jKlvYcA46diECISimM2nFZJ6', 'admin', null, null, 'admin', NOW(), '1', NOW(), '1')
;
SET FOREIGN_KEY_CHECKS = 1;

SQL;
