<p align="center">
  <img src="https://raw.githubusercontent.com/luyadev/luya/master/docs/logo/luya-logo-0.2x.png" alt="LUYA Logo"/>
</p>

# LUYA *VENDOR/NAME* module/extension

[![LUYA](https://img.shields.io/badge/Powered%20by-LUYA-brightgreen.svg)](https://luya.io)

*Package description*

## Installation

Install the extension through composer:

```sh
composer require VENDOR/NAME
```

Run the import command afterwards:

```sh
./luya import
```

## Configuration

Ensure you have configured the [recpatcha library](https://github.com/himiklab/yii2-recaptcha-widget) in your config:

```php
'components' => [
    'reCaptcha' => [
        'class' => 'himiklab\yii2\recaptcha\ReCaptchaConfig',
        'siteKeyV3' => 'your siteKey v3',
        'secretV3' => 'your secret key v3',
    ],
]
```
