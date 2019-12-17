<?php
namespace app\models;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
?>	
<?php $this->title = "Добавление новостей и мероприятий"; ?>
	<div class="knig">
		<h1>Добавить новость или мероприятие</h1><br>
	</div>
	<div class="panel1">
		<?php


			$form=ActiveForm::begin([
				"action"=>"addbook",
				"method"=>"post",
				"options"=>["enctype"=>"multipart/form-data"],
				]);
		?>
			<?= $form->field($model,'name')->textInput(['class'=>'bookadd','placeholder' => "Название, в случае добавления мероприятия укажите дату"])?>
			<?= $form->field($model,'opisanie')->textarea(['class'=>'bookaddop','rows'=>'5','placeholder' => "Подробно"])?>
			<?= Html::submitButton('Добавить',['class'=>'btnsub'])?>
		<?php
			ActiveForm::end();
		?>
	</div>