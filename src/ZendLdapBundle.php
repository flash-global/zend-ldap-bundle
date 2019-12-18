<?php

namespace ZendLdapBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use ZendLdapBundle\DependencyInjection\ZendLdapExtension;

/**
 * Class ZendLdapBundle
 * @package ZendLdapBundle
 */
class ZendLdapBundle extends Bundle
{
    /**
     * @return ZendLdapExtension
     */
    public function getContainerExtension()
    {
        return new ZendLdapExtension();
    }
}
