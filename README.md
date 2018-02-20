Eth8585\ZfSmartyrenderer - Zend Framework 3 Smarty Renderer
==================================================================

The **Eth8585\ZfSmartyrenderer** module allows to use Smarty for template rendering in ZF3 applications.

## Hot to install

Install `eth8505/zf-smarty-renderer` package via composer.

~~~bash
$ composer require eth8505/zf-smarty-renderer
~~~

Load the module in your `application.config.php` file like so:

~~~php
<?php

return [
	'modules' => [
		'Eth8505\ZfSmartyRenderer\\',
		// ...
	],
];
~~~