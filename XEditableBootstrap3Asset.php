<?php
/**
 * Class XEditableBootstrap3Asset
 *
 * @author Aleksandr Besedin <bs@cosmonova.net>
 * @package mcms\xeditable
 * Cosmonova LLC
 */


namespace mcms\xeditable;

class XEditableBootstrap3Asset extends XEditableAsset
{

    public $js = [
        "x-editable/bootstrap3-editable/js/bootstrap-editable.min.js"
    ];

    public $css = [
        "x-editable/bootstrap3-editable/css/bootstrap-editable.css"
    ];

    public $publishOptions = [
        'forceCopy' => true
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];

}
