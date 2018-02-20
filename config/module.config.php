<?php
namespace Eth8505\ZfSmartyRenderer;

use Eth8505\ZfSmartyRenderer\View\Strategy;
use Eth8505\ZfSmartyRenderer\Service\StrategyFactory;
use Eth8505\ZfSmartyRenderer\View\Renderer;
use Eth8505\ZfSmartyRenderer\Service\RendererFactory;
use Eth8505\ZfSmartyRenderer\Service\PluginManager;
use Eth8505\ZfSmartyRenderer\Service\PluginManagerFactory;
use Eth8505\ZfSmartyRenderer\Service\PluginDelegator;

return [
    'view_manager' => [
        'strategies' => [
            Strategy::class,
        ],
    ],
    'service_manager' => [
        'factories' => [
            Strategy::class => StrategyFactory::class,
            Renderer::class => RendererFactory::class,
            PluginManager::class => PluginManagerFactory::class,
        ],
        'delegators' => [
            Renderer::class => [
                PluginDelegator::class,
            ],
        ],
    ],
    'smarty' => [
        'suffix' => 'tpl',
        'compile_dir' => getcwd() . '/data/smarty/templates_c',
        'config_file' => getcwd() . '/config/autoload/smarty.conf',
        'escape_html' => true,
        'caching' => false,
        'cache_dir' => getcwd() . '/data/smarty/cache',
        'plugins_dir' => getcwd() . '/data/smarty/plugins',
        'plugins' => [
            // Plugin manager configuration.
            'manager' => [
            ],
            // Plugins.
            // For example (MyFuncPlugin should be added in Plugin manager):
            //     'functions' => [
            //         'my_func' => MyFuncPlugin::class,
            //     ]
            // This config register MyFuncPlugin with "my_func" name in Smarty.
            'functions' => [
            ],
            'modifiers' => [
            ],
            'blocks' => [
            ],
            'if_blocks' => [
            ],
            'cycle_blocks' => [
            ],
        ],
    ],
];
