Yii2 simpleParallax.js wrapper
===================
Wrapper for Yii2 from simpleParallax.js by https://github.com/geosigno

https://simpleparallax.com/

https://github.com/geosigno/simpleParallax.js/

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
composer require --prefer-dist icesign/yii2-simpleparallax "*"
```

or add

```
"icesign/yii2-simpleparallax": "*"
```

to the require section of your `composer.json` file.


Usage
-----

1. Register desired asset bundle in view
2. Set the x and y  to define direction and velocity. An extra optional parameter
(when) tells the element when it should start moving. use "asap" to move the element
as soon as the scroll event fires. Use visible (default value) for those elements
that should move as soon they are visible in the viewport.
3. Scroll to see the AWESOME effect.

[data-parallax="{x}, {y}, {when}"]

Example with 3 parallax elements

```html
<div data-parallax="0.2, -0.2, asap"></div>
<div data-parallax="0.2, -0.2, visible"></div>
<div data-parallax="0.2, -0.2"></div>
```

* TIP: try it with css transitions on transform to create nicer effect.
* TIP: to make realistic parallax effects, closer (alsor bigger) elements should
move faster than elements tha are farther (also smaller).

Example widget usage

```php
<?php Parallax::begin(['x' => 0.1, 'y' => -0.2]); ?>
<?= '... some content' ?>
<?php Parallax::end(); ?>
```