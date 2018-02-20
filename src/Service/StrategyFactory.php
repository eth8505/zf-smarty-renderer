<?php
namespace Eth8505\ZfSmartyRenderer\Service;

use Zend\ServiceManager\Factory\FactoryInterface;
use Interop\Container\ContainerInterface;
use Eth8505\ZfSmartyRenderer\View\Renderer;
use Eth8505\ZfSmartyRenderer\View\Strategy;

class StrategyFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $renderer = $container->get(Renderer::class);
        $strategy = new Strategy($renderer);
        return $strategy;
    }
}
