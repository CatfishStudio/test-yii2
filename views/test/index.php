<?php
use yii\helpers\Html;
?>
<?=Html::encode($message); ?>
<br>
<ul>
	<li>TEST FORM: <?=Html::a('go test form', ['test/form']);?></li>
	<li>TEST AJAX: <?=Html::a('go ajax test', ['test/ajax']);?></li>
	<li>TEST SESSION: <?=Html::a('go session test', ['test/session']);?></li>
	<li>TEST DATABASE (QUERY): <?=Html::a('go database query test', ['test/database']);?></li>
	<li>TEST DATABASE (TABLES): <?=Html::a('go database tables test', ['test/tables']);?></li>
</ul>
