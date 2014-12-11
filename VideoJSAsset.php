<?php
/* 2014-12-11
 * @author Prawee Wongsa <konkeanweb@gmail.com>
 * @reference http://www.yiiframework.com/wiki/690/render-a-form-in-a-modal-popup-using-ajax/
 * @version 1.1
 */
namespace prawee\widgets\assets;

use yii\web\AssetBundle;
class VideoJSAsset extends AssetBundle{
    /*
     * @inheritdoc
     */
    public $sourcePath='@prawee/widgets/assets';

    /*
     * @inheritdoc
     */
    public $css=[
        'css/video-js.css',
    ];

    /*
     * @inheritdoc
     */
    public $js=[
        'js/video.js'
    ];

    /*
     * @inheritdoc
     */
    public $depends=[
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}

