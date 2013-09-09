<?php
/* @var $this FieldsController */
/* @var $model FormField */

$this->breadcrumbs=array(
	'Form Fields'=>array('index'),
	'Manage',
);
$this->menu=array(
	array('label'=>'Add New FormField', 'url'=>array('forms/'.$form_id.'/fields/new')),
	array('label'=>'View Form #'.$form_id, 'url'=>array('forms/view', 'form'=>$form_id)),
	array('label'=>'Manage Forms', 'url'=>array('forms/all')),
	array('label'=>'Manage Types', 'url'=>array('types/all')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#form-field-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Form Fields for Form #<?php echo $form_id;?></h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'form-field-grid',
	'dataProvider'=>$model->search($form_id),
	'filter'=>$model,
	'columns'=>array(
		'FIELD_ID',
		'FORM_ID',
		array(
			'name'=>'VARNAME',
			'type'=>'raw',
			'value'=>'$data->VARNAME',
		),
		array(
			'name'=>'TITLE',
			'value'=>'$data->TITLE',
		),
		array(
			'name'=>'FIELD_TYPE',
			'value'=>'$data->FIELD_TYPE',
			'filter'=>FormField::itemAlias("field_type"),
		),
		//'FIELD_SIZE',
		//'field_size_min',
		array(
			'name'=>'REQUIRED',
			'value'=>'FormField::itemAlias("required",$data->REQUIRED)',
			'filter'=>FormField::itemAlias("required"),
		),
		'POSITION',
		array(
			'name'=>'VISIBLE',
			'value'=>'FormField::itemAlias("visible",$data->VISIBLE)',
			'filter'=>FormField::itemAlias("visible"),
		),
		//*/
		array(
			'class'=>'CButtonColumn',
			'buttons'=>array(
				'view'=>array(
					'url'=>'$this->grid->controller->createUrl("view", array("field"=>$data->primaryKey,"form"=>$data["FORM_ID"]))',
					'options'=>array('title'=>'View'),
				),
				'update'=>array(
					'url'=>'$this->grid->controller->createUrl("edit", array("field"=>$data->primaryKey,"form"=>$data["FORM_ID"]))',
					'options'=>array('title'=>'Edit'),
				),
				'delete'=>array(
					'url'=>'$this->grid->controller->createUrl("delete", array("field"=>$data->primaryKey,"form"=>$data["FORM_ID"]))',
					'options'=>array('title'=>'Delete'),
				)
			),
		),
	),
)); ?>
