<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Symfony\Bundle\DoctrineBundle\DoctrineBundle(),
            new Symfony\Bundle\AsseticBundle\AsseticBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            new JMS\SecurityExtraBundle\JMSSecurityExtraBundle(),
            
            // application related bundles
			new Contigo\ModelBundle\ContigoModelBundle(),
			//new Contigo\DomainBundle\ContigoDomainBundle(),
            new Contigo\CommonBundle\ContigoCommonBundle(),			
			new Contigo\Gam\PartialBundle\ContigoGamPartialBundle(),
            new Contigo\Gam\HomeBundle\ContigoGamHomeBundle(),
            new Contigo\Gam\SolutionBundle\ContigoGamSolutionBundle(),
            new Contigo\Gam\PartnerBundle\ContigoGamPartnerBundle(),
            new Contigo\Gam\BeaconBundle\ContigoGamBeaconBundle(),
            new Contigo\Gam\SupportBundle\ContigoGamSupportBundle(),
            new Contigo\Gam\DeveloperBundle\ContigoGamDeveloperBundle(),
        );

        if (in_array($this->getEnvironment(), array('dev', 'test'))) {
            $bundles[] = new Acme\DemoBundle\AcmeDemoBundle();
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
        }

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__.'/config/config_'.$this->getEnvironment().'.yml');
    }
}
