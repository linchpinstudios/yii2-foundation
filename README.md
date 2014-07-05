Yii2-foundation
===============

Zurb Foundation for Yii2.

Foundation Website: http://foundation.zurb.com

Foundation Documentation: http://foundation.zurb.com/docs/


Installation
===============

<h4>Composer:</h4>

<h5>1) Add to your composer.json</h5>
```
"require": {
  ...
  "linchpinstudios/yii2-foundation": "*",
  ...
},
```

<h5>2) Run</h5>
```
php composer.phar update
```

<h5>3) Add to your Assets/AppAssets.php</h5>
```
public $depends = [
  ...
  'linchpinstudios\foundation\FoundationAssets',
  ...
];
```

<h6>Note: ellipsis (...) don't actually get added, they represent any other code you have in the arrays</h6>
