<?php
use yii\helpers\Html;
?>
<?=Html::encode($message); ?>
<br>
<ul>
	<li>TEST FORM: <?=Html::a('go test form', ['test/form']);?></li>
	<li>TEST AJAX: <?=Html::a('go ajax test', ['test/ajax']);?></li>
        <li>TEST DATABASE: <?=Html::a('go database test', ['test/database']);?></li>
        <li>TEST SESSION: <?=Html::a('go session test', ['test/session']);?></li>
</ul>
