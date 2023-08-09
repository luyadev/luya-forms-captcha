<?php

namespace luya\forms\captcha;

use Yii;
use himiklab\yii2\recaptcha\ReCaptchaValidator3;
use luya\cms\base\PhpBlock;
use luya\forms\blockgroups\FormGroup;
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

    public function blockGroup()
    {
        return FormGroup::class;
    }

    public function frontend()
    {
        Yii::$app->forms->autoConfigureAttribute(
            $this->getVarValue($this->varAttribute),
            ReCaptchaValidator3::class, 
            true,
            false
        );

        $varName = $this->getVarValue($this->varAttribute);
        if (!$varName) {
            return;
        }
        
        Yii::$app->forms->model->invisibleAttribute($varName);

        // Use all possible options with ActiveField or use the HtmlHelper
        return Yii::$app->forms->form->field(Yii::$app->forms->model, $varName)
            ->widget('himiklab\yii2\recaptcha\ReCaptcha3')
            ->label(false);

    }
}
