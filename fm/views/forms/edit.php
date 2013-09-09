<?php
/* @var $this FormController */
/* @var $model Form */

$this->breadcrumbs=array(
	'Forms'=>array('index'),
	$model->FORM_ID=>array('view','id'=>$model->FORM_ID),
	'Update',
);

$this->menu=array(
	array('label'=>'View Form #'.$model->FORM_ID, 'url'=>array('view', 'form'=>$model->FORM_ID)),
	array('label'=>'Manage Form #'.$model->FORM_ID."'s Fields", 'url'=>array('fields/index', 'form'=>$model->FORM_ID)),	
	array('label'=>'Add New Form', 'url'=>array('new')),
	array('label'=>'List All Forms', 'url'=>array('all')),
	array('label'=>'Manage Types', 'url'=>array('types/all')),
);
?>

<h1>Edit Form #<?php echo $model->FORM_ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>