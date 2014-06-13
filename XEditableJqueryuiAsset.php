<?php
/**
 * Class XEditableJqueryuiAsset
 *
 * @author Aleksandr Besedin <bs@cosmonova.net>
 * @package mcms\xeditable
 * Cosmonova LLC
 */


namespace mcms\xeditable;


class XEditableJqueryuiAsset extends XEditableAsset
{
    public $js = [
        "x-editable/jqueryui-editable/js/jqueryui-editable.min.js"
    ];

    public $css = [
        "x-editable/jqueryui-editable/css/jqueryui-editable.css"
    ];

    public $publishOptions = [
        'forceCopy' => true
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\jui\CoreAsset',
        'yii\jui\TabsAsset',
        'yii\jui\SortableAsset',
        'yii\jui\ButtonAsset',
        'yii\jui\TooltipAsset',
        'yii\jui\DialogAsset',
        'yii\jui\DatePickerAsset',
        'yii\jui\DatePickerRegionalAsset',
        'yii\jui\AutoCompleteAsset',
        'yii\jui\AccordionAsset',
        'yii\jui\MenuAsset',
        'yii\jui\SelectableAsset',
        'yii\jui\TooltipAsset',
    ];
}
