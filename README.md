Eth8585\ZfSmartyrenderer - Zend Framework 3 Smarty Renderer
==================================================================

The **Eth8585\ZfSmartyRenderer** module allows to use Smarty for template rendering in ZF3 applications.

**WARNING** This is currently under development and will most likely not work.

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

### Thanks
Thanks to [Heiko Baumgärtner](https://github.com/skillfish) and his [skillfish/zf3-smarty-module](https://github.com/skillfish/zf3-smarty-module) module
as well as the original [randlem/zf2-smarty-module](https://github.com/randlem/zf2-smarty-module) ZF2 module which this
module is largely based upon..