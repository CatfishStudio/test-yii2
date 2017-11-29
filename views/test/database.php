<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h2>DATA TABLE: Countries</h2>
<ul>
    <?php foreach ($dataTable as $value): ?>
    <li>
        <?= Html::encode("{$value->name} ({$value->code})"); ?>
        <?= $value->population ?>
    </li>
    <?php endforeach; ?>
</ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>