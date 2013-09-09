<?php
/* @var $this FieldsController */
/* @var $model FormField */

$this->breadcrumbs=array(
	'Form Fields'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List All of Form #'.$form_id."'s Fields", 'url'=>array('forms/'.$form_id.'/fields/all')),
	array('label'=>'Manage Forms', 'url'=>array('forms/all')),
	array('label'=>'Manage Types', 'url'=>array('types/all')),
);
?>

<h1>Create New Form Field for Form #<?php echo $form_id;?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model,'form_id'=>$form_id)); ?>