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
  // ...
  "linchpinstudios/yii2-foundation": "*",
  // ...
},
```

<h5>2) Run</h5>
```
php composer.phar update
```


Setup Assets
===============


<h5>Add to your Assets/AppAssets.php</h5>
```
public $depends = [
  // ...
  'linchpinstudios\foundation\FoundationAssets',
  // ...
];
```
