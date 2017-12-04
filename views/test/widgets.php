<?php
use app\components\TestWidget;
use app\components\TestWidget2;
?>

<?php echo TestWidget::widget(['name' => 'Гость']); ?>

<?php TestWidget2::begin(); ?>
    <h1>привет, мир!</h1>
<?php TestWidget2::end(); ?>