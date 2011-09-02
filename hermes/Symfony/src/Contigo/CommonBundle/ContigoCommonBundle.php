<?php

namespace Contigo\CommonBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Doctrine\DBAL\Types\Type;

class ContigoCommonBundle extends Bundle
{
	public function boot() {
		$em = $this->container->get('doctrine.orm.default_entity_manager');
		
		// types registration
		Type::addType('blob', 'Contigo\CommonBundle\Doctrine\DBAL\Types\Blob');
		$em->getConnection()->getDatabasePlatform()->registerDoctrineTypeMapping('BLOB', 'blob');
		
		Type::addType('bytea', 'Contigo\CommonBundle\Doctrine\DBAL\Types\Bytea');
		$em->getConnection()->getDatabasePlatform()->registerDoctrineTypeMapping('BYTEA', 'bytea');

		Type::addType('_int4', 'Contigo\CommonBundle\Doctrine\DBAL\Types\Integera');
		$em->getConnection()->getDatabasePlatform()->registerDoctrineTypeMapping('_INT4', '_int4');		
	}
}
