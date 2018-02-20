<?php
namespace Eth8505\ZfSmartyRenderer\Service;

use Zend\ServiceManager\AbstractPluginManager;
use Eth8505\ZfSmartyRenderer\Plugin\PluginInterface;

class PluginManager extends AbstractPluginManager
{
    protected $instanceOf = PluginInterface::class;
}
