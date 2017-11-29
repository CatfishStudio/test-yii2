<?php
use yii\helpers\Html;

$jsCode = <<<JS
	$('#btn').on('click', function(){
		$.ajax({
			url: 'index.php?r=test/ajax',
			data: {test_data: '12345'},
			type: 'POST',
			success: function(result){
				console.log(result);
				$('#showResult').html(result);
			},
			error: function(){
				alert('Ajax Error!');
			}
		});
	});
JS;
$this->registerJS($jsCode);
?>

<?= Html::submitButton('Отправить', ['class' => 'btn btn-primary', 'id' => 'btn']); ?>

<div id="showResult"></div>