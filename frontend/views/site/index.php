<?php

/** @var yii\web\View $this */

$this->title = 'My Yii Application';

    foreach ($dataProvider->models as $key => $value) {
?>
<h1><?=$value->title?></h1><p><small><?=$value->username?> <?=$value->date?></small></p><p><?=$value->content?></p>
<hr>
<?php
        // echo "<pre>"; print_r($value->title); exit();
    }
?>