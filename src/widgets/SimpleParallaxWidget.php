<?php

namespace icesign\simpleparallax\widgets;

use Yii;
use yii\base\Widget;
use yii\helpers\Html;
use icesign\simpleparallax\SimpleParallaxAssetMinBundle;

class SimpleParallaxWidget extends Widget
{
    /**
     * @var string or node, default '', css selector for animated object
     */
    public $selector = '';
    /**
     * @var string, default up, possible values up - right - down - left - up left - up right - down left - left right
     */
    public $orientation = 'up';
    /**
     * @var float, default 1.3, possible values numbers above value 1.0
     */
    public $scale = 1.3;
    /**
     * @var bool, default false
     */
    public $overflow = false;
    /**
     * @var float, default 0, possible values numbers above 0, in seconds
     */
    public $delay = 0;
    /**
     * @var string, default 'cubic-bezier(0,0,0,1)', possible values any CSS transition
     */
    public $transition = 'cubic-bezier(0,0,0,1)';
    /**
     * @var string or node, default ''
     */
    public $customContainer = '';
    /**
     * @var string, default ''
     */
    public $customWrapper = '';
    /**
     * @var float, default 0, possible values percentage between 1 and 99
     */
    public $maxTransition = 0;
    public $clientOptions = [];

    public function init() {
        parent::init();
        $view = Yii::$app->getView();
        $this->registerAssets();
    }

    /**
     * Registers the needed assets
     */
    public function registerAssets()
    {
        $view = $this->getView();
        SimpleParallaxAssetMinBundle::register($view);
    }

    /**
     * @return string
     */
    public function run()
    {
        $view->registerJs("
        var images = document.querySelectorAll('".$this->selector."');
        new simpleParallax(images, {
            delay: ".$this->delay.",
            orientation: '".$this->orientation."',
            scale: ".$this->scale.",
            overflow: ".$this->overflow.",
            customContainer: '".$this->customContainer."',
            customWrapper: '".$this->customWrapper."'
        });
        ", $view::POS_READY);
    }

}