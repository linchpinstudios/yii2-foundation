<?php
/**
 * @link http://www.linchpinstudios.com/
 * @copyright Copyright (c) 2014 Linchpin Studios LLC
 * @license http://opensource.org/licenses/MIT
 */

namespace linchpinstudios\foundation;

use yii\helpers\Html;
use yii\base\InvalidConfigException;

/**
 * An Icon Bar provides a menu to quickly navigate an app. Use the Icon Bar 
 * horizontally or vertically, with the labels below the icons or to the 
 * right. Have it your way.
 *
 * For example,
 *
 * ```php
 * // a button group using Dropdown widget
 * echo IconBar::widget([
 *     'direction' => 'vertical',
 *     'labelRight' => true,  
 *     'icons' => [
 *         'items' => [
 *             ['label' => 'One', 'url' => '/', 'icon' => 'fi-address-book'],
 *             ['label' => 'Two', 'url' => '#', 'icon' => 'fi-alert'],
 *         ],
 *     ],
 * ]);
 * ```
 * @see http://foundation.zurb.com/docs/components/icon-bar.html
 * @see http://zurb.com/playground/foundation-icon-fonts-3
 * @author Josh Hagel <joshhagel@linchpinstudios.com>
 * @since 0.1
 */
 
 class IconBar extends \yii\base\Widget
 {
    /**
     * @var string the bar direction
     */
     public $direction = 'horizontal';
    /**
     * @var array the configuration array for [[icons]].
     */
     public $icons = [];
    /**
     * @var intiger the number of icons to display
     */
     public $iconsUp = 0;
    /**
     * @var boolean whether the label be positioned on the right.
     */
     public $labelRight = false;
    /**
     * @var boolean whether the label should be HTML-encoded.
     */
     public $encodeLabel = true;
    
    /**
     * run function.
     * 
     * @access public
     * @return void
     */
    public function run()
    {
        $classes = $this->generateClass();
        
        echo Html::beginTag('div', ['class' => $classes])."\n";
        echo $this->renderItems()."\n";
        echo Html::endTag('div')."\n";
    }
    
    /**
     * generateClass function.
     * 
     * @access private
     * @return void
     */
    private function generateClass()
    {
        $class[] = 'icon-bar';
        
        if($this->iconsUp === 0){
            $class[] = $this->getCountUp(count($this->icons['items']));
        }else{
            $class[] = $this->getCountUp($this->iconsUp);
        }
        
        if($this->direction != 'horizontal'){
            $class[] = $this->direction;
        }
        
        if($this->labelRight){
            $class[] = 'label-right';
        }
        
        return implode(" ", $class);
    }
    
    /**
     * getCountUp function.
     * 
     * @access private
     * @param mixed $itemCount
     * @return void
     */
    private function getCountUp($itemCount){
        if($itemCount > 6){
            return 'six-up';
        }else{
            switch($itemCount){
                case 1:
                    return 'one-up';
                    break;
                case 2:
                    return 'two-up';
                    break;
                case 3:
                    return 'three-up';
                    break;
                case 4:
                    return 'four-up';
                    break;
                case 5:
                    return 'five-up';
                    break;
                case 6:
                    return 'six-up';
                    break;
                default:
                    return '';
            }
        }
    }
    
    /**
     * renderItems function.
     * 
     * @access private
     * @return void
     */
    private function renderItems()
    {
        $items = [];
        $icons = $this->icons['items'];
        foreach($icons as $i){
            $labelContent = $i['label'];
            if ($this->encodeLabel) {
                $labelContent = Html::encode($labelContent);
            }
            $label = Html::tag('label',$labelContent)."\n";
            
            $icon = Html::tag('i','',['class'=>$i['icon']])."\n";
            
            $options = [
                'class' => 'item',
            ];
            $url = $i['url'];
            $items[] = Html::a($icon.$label,$url,$options)."\n";
        }
        return implode("\n", $items);
    }
 }