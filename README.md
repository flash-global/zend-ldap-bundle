# zend-ldap-bundle

## How to use the bundle

###1. Install the package
    composer require fei/zend-ldap-bundle
###2. Setup the required environmental variables 
    'LDAP_HOST'     => '127.0.0.1',
    'LDAP_PORT'     => '636',
    'LDAP_BASE_DN'  => 'dc=example,dc=com',
    'LDAP_USERNAME' => 'toto',
    'LDAP_PASSWORD' => 'pa55w0rd',
###3. Add bundle to config/bundles.php
    ZendLdapBundle\ZendLdapBundle::class => ['all' => true],
