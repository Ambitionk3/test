<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Eccube\Repository\CustomerFavoriteProductRepository' shared autowired service.

include_once $this->targetDirs[3].'/src/Eccube/Repository/CustomerFavoriteProductRepository.php';

return $this->services['Eccube\\Repository\\CustomerFavoriteProductRepository'] = new \Eccube\Repository\CustomerFavoriteProductRepository(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'});