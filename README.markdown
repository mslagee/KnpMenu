KnpMenu
=======

KnpMenu类库可以为PHP 5.3提供面向对象的菜单
在Symfony2中，最初用于 [KnpMenuBundle](https://github.com/KnpLabs/KnpMenuBundle)
不过现在可以单独使用了

[![Build Status](https://secure.travis-ci.org/KnpLabs/KnpMenu.png)](http://travis-ci.org/KnpLabs/KnpMenu)
[![Latest Stable Version](https://poser.pugx.org/knplabs/knp-menu/v/stable.png)](https://packagist.org/packages/knplabs/knp-menu)
[![Latest Unstable Version](https://poser.pugx.org/knplabs/knp-menu/v/unstable.png)](https://packagist.org/packages/knplabs/knp-menu)

```php
<?php

use Knp\Menu\MenuFactory;
use Knp\Menu\Renderer\ListRenderer;

$factory = new MenuFactory();
$menu = $factory->createItem('My menu');
$menu->addChild('Home', array('uri' => '/'));
$menu->addChild('Comments', array('uri' => '#comments'));
$menu->addChild('Symfony2', array('uri' => 'http://symfony-reloaded.org/'));
$menu->addChild('Coming soon');

$renderer = new ListRenderer();
echo $renderer->render($menu);
```

上面的代码将会生成如下的 HTML:

```html
<ul>
  <li class="first">
    <a href="/">Home</a>
  </li>
  <li class="current">
    <a href="#comments">Comments</a>
  </li>
  <li>
    <a href="http://symfony-reloaded.org/">Symfony2</a>
  </li>
  <li class="last">
    <span>Coming soon</span>
  </li>
</ul>
```

通过这样的方式，你终于不必为了显示“第一项”，“最后一项”，“子菜单”而编写一个丑陋的模版了

> The bulk of the documentation can be found in the `doc` directory.

## Installation

KnpMenu 不提供自动加载器 but follow the PSR-0 convention. 
你可以对这个类库使用任何兼容的加载器, for instance the Symfony2
[ClassLoader component](https://github.com/symfony/ClassLoader).
假设你签出的类库在 `vendor/KnpMenu`下面, 它应该这样配置:

```php
<?php
$loader->registerNamespaces(array(
    'Knp\Menu' => __DIR__.'/vendor/KnpMenu/src'
    // ...
));
```

## What now?

Follow the tutorial in `doc/01-Basics-Menus.markdown` and `doc/02-Twig-Integration.markdown`
to discover how `KnpMenu` will rock your world!

## Credits

This bundle was originally ported from [ioMenuPlugin](http://github.com/weaverryan/ioMenuPlugin),
a menu plugin for symfony1. It has since been developed by [KnpLabs](http://www.knplabs.com) and
the Symfony community.
