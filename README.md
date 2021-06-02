<p align="center">
  <img src="https://raw.githubusercontent.com/luyadev/luya/master/docs/logo/luya-logo-0.2x.png" alt="LUYA Logo"/>
</p>

# LUYA Captcha Block for Forms Module

[![LUYA](https://img.shields.io/badge/Powered%20by-LUYA-brightgreen.svg)](https://luya.io)

This package contains a Google ReCapchta3 Block which can be used in combination with [LUYA Forms Module](https://github.com/luyadev/luya-module-forms).

## Installation

Install the extension through composer:

```sh
composer require luyadev/luya-forms-captcha
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
