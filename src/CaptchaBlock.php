<?php

namespace luya\forms\captcha;

use Yii;
use himiklab\yii2\recaptcha\ReCaptchaValidator3;
use luya\cms\base\PhpBlock;
use luya\forms\FieldBlockTrait;

class CaptchaBlock extends PhpBlock
{
    use FieldBlockTrait;
    
    public function name()
    {
        return 'Form Captcha';
    }

    public function admin()
    {
        return '<p>Captcha</p>';
    }

    public function icon()
    {
        return 'android';
    }

    public function frontend()
    {
        Yii::$app->forms->autoConfigureAttribute(
            $this->getVarValue($this->varAttribute),
            ReCaptchaValidator3::class, 
            true,
            false
        );

        // this ensures the value is hidden in confirm and save actions, and also ensure the attribute
        // value does not need to be validate again after the preview.
        Yii::$app->forms->model->invisibleAttribute($this->getVarValue($this->varAttribute));

        return Yii::$app->forms->form->field(Yii::$app->forms->model, $this->getVarValue($this->varAttribute))
            ->widget('himiklab\yii2\recaptcha\ReCaptcha3')
            ->label(false);
    }
}