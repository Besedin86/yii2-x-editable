<?php

/**
 * @inheritdoc
 */

namespace mcms\xeditable;

use yii\web\AssetBundle;

\Yii::setAlias('@xeditable', dirname(__FILE__));

/**
 * @inheritdoc
 */
class XEditableAsset extends AssetBundle
{

    public $sourcePath = '@xeditable/assets/';

    public $js = [];

    public $css = [];

    public $publishOptions = [
        'forceCopy' => true
    ];

	public $depends = [];

}
