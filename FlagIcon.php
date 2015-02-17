<?php

namespace tugmaks\FlagIcons;

use yii\helpers\Html;

/**
 * This is just an example.
 */
class FlagIcon extends \yii\base\Widget
{

    const SIZE_16 = 16;
    const SIZE_24 = 24;
    const SIZE_32 = 32;
    const SIZE_48 = 48;
    const SIZE_64 = 64;
    const SIZE_128 = 128;
    public $size;
    public $iso;
    public $options;

    public function run()
    {
        return Html::img('$src', $this->options);
    }

}
