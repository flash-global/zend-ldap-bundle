<?php

namespace ZendLdapBundle\Tests;

use PHPUnit\Framework\TestCase;
use ZendLdapBundle\DependencyInjection\ZendLdapExtension;
use ZendLdapBundle\ZendLdapBundle;

class ZendLdapBundleTest extends TestCase
{
    public function testGetContainerExtension()
    {
        $instance = new ZendLdapBundle();

        $this->assertInstanceOf(ZendLdapExtension::class ,$instance->getContainerExtension());
    }
}