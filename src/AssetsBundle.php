<?php
/**
 * @link https://github.com/Konstantin-Vl/yii2-jquery-fix-clone
 * @copyright Copyright (c) 2018 Konstantin Voloshchuk
 * @license https://github.com/Konstantin-Vl/yii2-jquery-fix-clone/blob/master/LICENSE
 */

namespace Kosv\jFixClone;

use yii\web\AssetBundle;
use yii\web\JqueryAsset;

/**
 * @author Konstantin Voloshchuk <kosv.dev@gmail.com>
 * @since 1.0
 */
class AssetsBundle extends AssetBundle
{
    public $sourcePath = __DIR__ . "/../assets";

    public $depends = [
        JqueryAsset::class,
    ];

    public $js = [
        'js/jquery.fix.clone.js',
    ];
}