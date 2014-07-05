<?php
/**
 * @link http://www.linchpinstudios.com/
 * @copyright Copyright (c) 2014 Linchpin Studios LLC
 * @license http://opensource.org/licenses/MIT
 */

namespace linchpinstudios\foundation;

use yii\web\AssetBundle;

/**
 * Asset bundle for the Twitter bootstrap css files.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class Asset extends AssetBundle
{
    public $sourcePath = '@vendor/linchpin-studios/yii2-foundation/dist';
    public $css = [
        'css/normalize.css',
        'css/foundation.min.css',
    ];
    public $js = [
        'js/vendor/modernizr.js',
    ];
}
