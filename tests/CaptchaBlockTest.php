<?php

namespace luya\forms\captcha\tests;

use luya\forms\captcha\CaptchaBlock;
use yii\widgets\ActiveForm;

class CaptchaBlockTest extends PackageTestCase
{
    public $blockClass = CaptchaBlock::class;

    public function testFrontend()
    {
        $this->app->forms->startForm(ActiveForm::begin());
        $this->block->setVarValues([
            'attribute' => 'firstname',
        ]);

        $this->assertNotEmpty($this->block->frontend());
        $this->assertNotEmpty($this->block->name());
        $this->assertNotEmpty($this->block->admin());
        $this->assertNotEmpty($this->block->icon());
        $this->assertNotEmpty($this->block->blockGroup());

        $this->app->forms->form->end();
    }
}