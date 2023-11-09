<?php
namespace luya\forms\captcha\tests;

use luya\forms\Forms;
use luya\testsuite\cases\CmsBlockTestCase;
use luya\testsuite\cases\WebApplicationTestCase;
use luya\testsuite\components\DummySession;
use luya\web\AssetManager;

class PackageTestCase extends CmsBlockTestCase
{
    public function getConfigArray()
    {
        return [
            'id' => 'packagetest',
            'basePath' => __DIR__,
            'language' => 'en',
            'modules' => [
                'forms' => [
                    'class' => 'luya\forms\Module',
                ],
                'admin' => [
                    'class' => 'luya\admin\Module',
                ]
            ],
            'components' => [
                'reCaptcha' => [
                    'class' => 'luyadev\recaptcha\ReCaptchaConfig',
                    'siteKeyV3' => 'your siteKey v3',
                    'secretV3' => 'your secret key v3',
                ],
                'db' => [
                    'class' => 'yii\db\Connection',
                    'dsn' => 'sqlite::memory:',
                ],
                'forms' => [
                    'class' => Forms::class,
                    'activeFormClassOptions' => [
                        'enableClientScript' => false,
                    ]
                ],
                'session' => [
                    'class' => DummySession::class,
                ],
                'assetManager' => [
                    'class' => AssetManager::class,
                    'basePath' => dirname(__FILE__) . '/assets',
                    'bundles' => [
                        'yii\web\JqueryAsset' => false,
                        'luya\bootstrap4\Bootstrap4Asset' => false,
                        'yii\widgets\ActiveFormAsset' => false,
                        'yii\web\YiiAsset' => false,
                    ],
                ]
            ]
        ];
    }
}
