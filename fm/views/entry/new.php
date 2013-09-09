<?php
/* @var $this EntryController */

$this->breadcrumbs=array(
	'Form',
	$form->FORM_NAME,
	'Create'
);

$this->menu=array(
	array('label'=>'Manage Entries for Form (#'.$form->FORM_ID.')', 'url'=>array('index','form'=>$form->FORM_ID)),
	array('label'=>'Manage This Form (#'.$form->FORM_ID.')', 'url'=>array('forms/view', 'form'=>$form->FORM_ID)),
	array('label'=>'Manage Forms', 'url'=>array('forms/all')),
	array('label'=>'Manage Types', 'url'=>array('types/all')),
);

?>

<h1><?php echo "Create new entry for Form: ".$form->FORM_NAME; ?></h1>

<?php if(Yii::app()->user->hasFlash('entryMessage')): ?>
<div class="success">
	<?php echo Yii::app()->user->getFlash('entryMessage'); ?>
</div>
<?php endif; ?>

<?php echo $this->renderPartial('_form', array('model'=>$model,'form_id'=>$form->FORM_ID)); ?>