yii2 world flag widget
======================
yii2 world flag widget

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist tugmaks/yii2-flag-icons "*"
```

or add

```
"tugmaks/yii2-flag-icons": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
use \tugmaks\FlagIcons\FlagIcon as FI;
<?= FI::widget([
    'size'=> FI::64,
    'iso'=>'RU' // Alpha 2 code
]); ?>```

Images source  - http://www.icondrawer.com/flag-icons.php