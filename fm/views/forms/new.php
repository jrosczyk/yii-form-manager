<?php
/* @var $this FormsController */
/* @var $model Form */

$this->breadcrumbs=array(
	'Forms'=>array('index'),
	'New',
);

$this->menu=array(
	array('label'=>'List All Forms', 'url'=>array('all')),
	array('label'=>'Manage Types', 'url'=>array('types/all')),
);
?>

<h1>Create New Form</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>