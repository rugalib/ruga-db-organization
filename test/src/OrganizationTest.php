<?php

declare(strict_types=1);

namespace Ruga\Organization\Test;

use Laminas\ServiceManager\ServiceManager;

/**
 * @author                 Roland Rusch, easy-smart solution GmbH <roland.rusch@easy-smart.ch>
 */
class OrganizationTest extends \Ruga\Organization\Test\PHPUnit\AbstractTestSetUp
{
    public function testCanCreateOrganization(): void
    {
        $t = new \Ruga\Organization\OrganizationTable($this->getAdapter());
        
        /** @var \Ruga\Organization\Organization $row */
        $row = $t->createRow();
        $this->assertInstanceOf(\Ruga\Organization\Organization::class, $row);
        $row->save();
    }
    
    
    
    public function testCanWriteOrganization(): void
    {
        $t = new \Ruga\Organization\OrganizationTable($this->getAdapter());
        
        /** @var \Ruga\Organization\Organization $row */
        $row = $t->createRow();
        $name = 'Hans GmbH';
        $row->name = $name;
        $this->assertSame($name, $row->name);
        $this->assertSame("{$name}", $row->fullname);
        $row->save();
    }
    
    
    
    public function testCanReadOrganization(): void
    {
        $t = new \Ruga\Organization\OrganizationTable($this->getAdapter());
        /** @var \Ruga\Organization\Organization $row */
        $row = $t->createRow();
        $row->name = 'Hans GmbH';
        $row->save();
        
        $row = $t->createRow();
        $row->name = 'Vreni AG';
        $row->save();
        
        unset($row);
        $row = $t->findById(1)->current();
        $this->assertSame('Hans GmbH', $row->fullname);
    }
    
    
}
