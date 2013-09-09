<?php
/* @var $this FormController */
/* @var $model Form */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'form-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'TABLE_NAME'); ?>
		<?php echo $form->textField($model,'TABLE_NAME',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'TABLE_NAME'); ?>
		<p class="hint">Database name. Uppercase only.</p>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FORM_NAME'); ?>
		<?php echo $form->textField($model,'FORM_NAME',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'FORM_NAME'); ?>
		<p class="hint">Name of the form.</p>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'BEGIN_DATE'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
		'model' => $model,
		'attribute'=>'BEGIN_DATE',
		'options' => array(
			'changeMonth' => 'true',
			'changeYear' => 'true',
			'showButtonPanel' => 'true',
			'constrainInput' => 'false',
			'dateFormat'=>'yy-mm-dd',
		))); ?>
		<?php echo $form->error($model,'BEGIN_DATE'); ?>
		<p class="hint">If the form is to be available for limited time. Else, leave empty.</p>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'END_DATE'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
		'model' => $model,
		'attribute'=>'END_DATE',
		'options' => array(
			'changeMonth' => 'true',
			'changeYear' => 'true',
			'showButtonPanel' => 'true',
			'constrainInput' => 'false',
			'dateFormat'=>'yy-mm-dd',
		))); ?>
		<?php echo $form->error($model,'END_DATE'); ?>
		<p class="hint">If the form is to be available for limited time. Else, leave empty.</p>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TYPE_ID'); ?>
		<?php echo $form->dropDownList($model,'TYPE_ID', CHtml::listData(Type::model()->findAll(array('order' => 'TYPE_LABEL ASC')), 'TYPE_ID', 'TYPE_LABEL'), array('empty'=>'Select Type')) ?>
		<?php echo $form->error($model,'TYPE_ID'); ?>
		<p class="hint">Associate the form with a Type identifier (for staying organized).</p>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
		<?php echo CHtml::resetButton($model->isNewRecord ? 'Clear' : 'Reset'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->