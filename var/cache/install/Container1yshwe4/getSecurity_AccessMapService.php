<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.access_map' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/security/Http/AccessMapInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/security/Http/AccessMap.php';
include_once $this->targetDirs[3].'/vendor/symfony/http-foundation/RequestMatcherInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/http-foundation/RequestMatcher.php';

$this->services['security.access_map'] = $instance = new \Symfony\Component\Security\Http\AccessMap();

$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/'.$this->getEnv('string:ECCUBE_ADMIN_ROUTE').'/login'), [0 => 'IS_AUTHENTICATED_ANONYMOUSLY'], NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/'.$this->getEnv('string:ECCUBE_ADMIN_ROUTE').'/'), [0 => 'ROLE_ADMIN'], NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/mypage/login'), [0 => 'IS_AUTHENTICATED_ANONYMOUSLY'], NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/mypage/withdraw_complete'), [0 => 'IS_AUTHENTICATED_ANONYMOUSLY'], NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/mypage/change'), [0 => 'IS_AUTHENTICATED_FULLY'], NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/mypage/'), [0 => 'ROLE_USER'], NULL);

return $instance;
