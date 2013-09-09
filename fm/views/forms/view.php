<?php
/* @var $this FormController */
/* @var $model Form */

$this->breadcrumbs=array(
	'Forms'=>array('index'),
	$model->FORM_ID,
);

$this->menu=array(
	array('label'=>'Edit Form #'.$model->FORM_ID, 'url'=>array('edit', 'form'=>$model->FORM_ID)),
	array('label'=>'Manage Form #'.$model->FORM_ID."'s Fields", 'url'=>array('fields/index', 'form'=>$model->FORM_ID)),
	array('label'=>'Delete Form #'.$model->FORM_ID, 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','form'=>$model->FORM_ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Add New Form', 'url'=>array('new')),
	array('label'=>'List All Forms', 'url'=>array('all')),
	array('label'=>'Manage Types', 'url'=>array('types/all')),
);
?>

<h1>View Form #<?php echo $model->FORM_ID; ?></h1>

<?php echo $this->renderPartial('_view', array('data'=>$model)); ?>
