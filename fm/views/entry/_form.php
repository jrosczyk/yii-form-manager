<?php
/* @var $this EntryController */
/* @var $model Entry */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'entry-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	
	<?php 
		$fields=$model->getFields();
		if ($fields) {
			foreach($fields as $field) {
	?>
	
	<div class="row">
		<?php echo $form->labelEx($model,$field->VARNAME);
		
		if ($widgetEdit = $field->widgetEdit($model)) {
			echo $widgetEdit;
		} elseif ($field->RANGE) {
			echo $form->dropDownList($model,$field->VARNAME,Entry::range($field->RANGE));
		} elseif ($field->FIELD_TYPE=="TEXT") {
			echo $form->textArea($model,$field->VARNAME,array('rows'=>6, 'cols'=>50));
		} else {
			echo $form->textField($model,$field->VARNAME,array('size'=>60,'maxlength'=>(($field->FIELD_SIZE)?$field->FIELD_SIZE:255)));
		}
		echo $form->error($model,$field->VARNAME); ?>
	</div>
	
	<?php
			}//foreach
		}//if
	?>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Add' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->