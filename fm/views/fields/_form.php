<?php
/* @var $this FieldsController */
/* @var $model FormField */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'form-field-form',
	'enableAjaxValidation'=>false,
)); ?>
		
	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'VARNAME'); ?>
		<?php echo $form->textField($model,'VARNAME',array('size'=>60,'maxlength'=>50,'readonly'=>($model->FIELD_ID)?true:false)); ?>
		<?php echo $form->error($model,'VARNAME'); ?>
		<p class="hint">Database field name. Uppercase only.</p>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TITLE'); ?>
		<?php echo $form->textField($model,'TITLE',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'TITLE'); ?>
		<p class="hint">Label field name.</p>
	</div>

	<div class="row field_type">
		<?php echo $form->labelEx($model,'FIELD_TYPE'); ?>
		<?php echo (($model->FIELD_ID)?$form->textField($model,'FIELD_TYPE',array('size'=>50,'maxlength'=>50,'readonly'=>true)):$form->dropDownList($model,'FIELD_TYPE',FormField::itemAlias('field_type'),array('id'=>'field_type'))); ?>
		<?php echo $form->error($model,'FIELD_TYPE'); ?>
		<p class="hint">Field type column in the database.</p>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FIELD_SIZE'); ?>
		<?php echo $form->textField($model,'FIELD_SIZE',array('readonly'=>($model->FIELD_ID)?true:false)); ?>
		<?php echo $form->error($model,'FIELD_SIZE'); ?>
		<p class="hint">Field size column in the database.</p>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FIELD_SIZE_MIN'); ?>
		<?php echo $form->textField($model,'FIELD_SIZE_MIN'); ?>
		<?php echo $form->error($model,'FIELD_SIZE_MIN'); ?>
		<p class="hint">The minimum value of the field (form validator).</p>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'REQUIRED'); ?>
		<?php echo $form->DropDownList($model,'REQUIRED',FormField::itemAlias('required')); ?>
		<?php echo $form->error($model,'REQUIRED'); ?>
		<p class="hint">Required field (form validator).</p>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MATCH'); ?>
		<?php echo $form->textField($model,'MATCH',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'MATCH'); ?>
		<p class="hint">Regular expression (example: '/^[A-Za-z0-9\s,]+$/u').</p>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RANGE'); ?>
		<?php echo $form->textField($model,'RANGE',array('size'=>60,'maxlength'=>5000)); ?>
		<?php echo $form->error($model,'RANGE'); ?>
		<p class="hint">Predefined values (example: 1;2;3;4;5 or 1==One;2==Two;3==Three;4==Four;5==Five).</p>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ERROR_MESSAGE'); ?>
		<?php echo $form->textField($model,'ERROR_MESSAGE',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'ERROR_MESSAGE'); ?>
		<p class="hint">Error message when you validate the form.</p>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'OTHER_VALIDATOR'); ?>
		<?php echo $form->textField($model,'OTHER_VALIDATOR',array('size'=>60, 'maxlength'=>255)); ?>
		<?php echo $form->error($model,'OTHER_VALIDATOR'); ?>
		<p class="hint">JSON string (example: {"file":{"types":"jpg, gif, png"}}).</p>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DEFAULT'); ?>
		<?php echo $form->textField($model,'DEFAULT',array('size'=>60,'maxlength'=>255,'readonly'=>($model->FIELD_ID)?true:false)); ?>
		<?php echo $form->error($model,'DEFAULT'); ?>
		<p class="hint">The value of the default field (database).</p>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'WIDGET'); ?>
		<?php
			list($widgetsList) = FieldsController::getWidgets($model->FIELD_TYPE);
			echo $form->dropDownList($model,'WIDGET',$widgetsList,array('id'=>'widgetlist')); ?>
		<?php echo $form->error($model,'WIDGET'); ?>
		<p class="hint">Widget name.</p>
	</div>

	<div class="row widgetparams">
		<?php echo $form->labelEx($model,'WIDGETPARAMS'); ?>
		<?php echo $form->textField($model,'WIDGETPARAMS',array('size'=>60, 'maxlength'=>5000,'id'=>'widgetparams')); ?>
		<?php echo $form->error($model,'WIDGETPARAMS'); ?>
		<p class="hint">JSON string (example: {"param1":["val1","val2"],"param2":{"k1":"v1","k2":"v2"}}).</p>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'POSITION'); ?>
		<?php echo $form->textField($model,'POSITION'); ?>
		<?php echo $form->error($model,'POSITION'); ?>
		<p class="hint">Display order of fields.</p>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'VISIBLE'); ?>
		<?php echo $form->dropDownList($model,'VISIBLE',FormField::itemAlias('visible')); ?>
		<?php echo $form->error($model,'VISIBLE'); ?>
		<p class="hint">Display field as hidden or for all.</p>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->