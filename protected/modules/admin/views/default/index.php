<?php
/**
 * @var $this DefaultController
 * @var CActiveForm $form
 * @var modules\admin\models\User $model
 */
$form = $this->beginWidget('CActiveForm');
?>
<?=$form->errorSummary($model)?>
<?=$form->labelEx($model, 'username')?>
<?=$form->textField($model, 'username')?>
<?=$form->labelEx($model, 'password')?>
<?=$form->textField($model, 'password')?>
<?=$form->labelEx($model, 'email')?>
<?=$form->textField($model, 'email')?>
<?=CHtml::submitButton('go')?>
<?php $this->endWidget();?>