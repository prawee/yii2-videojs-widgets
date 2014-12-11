<?php
/* 2014-12-11
 * @author Prawee Wongsa <konkeanweb@gmail.com>
 * @version 1.1
 */
namespace prawee\widgets;

use yii\web\AssetBundle;
class VideoJSAsset extends AssetBundle{
    /*
     * @inheritdoc
     */
    public $sourcePath='@prawee/widgets';

    /*
     * @inheritdoc
     */
    public $css=[
        'css/video-js.min.css',
    ];

    /*
     * @inheritdoc
     */
    public $js=[
        'js/video.js',
        'js/youtube.js'
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

