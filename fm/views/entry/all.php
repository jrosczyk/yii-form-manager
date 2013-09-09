<?php
/* @var $this FieldsController */
/* @var $model FormField */

$this->breadcrumbs=array(
	'Entries',
	'Manage All',
);
$this->menu=array(
	array('label'=>'Add New Entry for Form (#'.$form->FORM_ID.')', 'url'=>array('new', 'form'=>$form->FORM_ID)),
	array('label'=>'Manage This Form (#'.$form->FORM_ID.')', 'url'=>array('forms/view', 'form'=>$form->FORM_ID)),
	array('label'=>'Manage Forms', 'url'=>array('forms/all')),
	array('label'=>'Manage Types', 'url'=>array('types/all')),
);
?>

<h1>Manage Entries for Form #<?php echo $form->FORM_ID;?></h1>



<table class="items">
	<thead>
		<tr>
			<th id="form-field-grid_c0">Entry ID</th>
			<th id="form-field-grid_c1">Form ID</th>
			<th id="form-field-grid_c2">Created By</th>
			<th id="form-field-grid_c3">Modified By</th>
			<th id="form-field-grid_c4">Create Date</th>
			<th id="form-field-grid_c5">Modified Date</th>
			<th class="button-column" id="form-field-grid_c8">&nbsp;</th>
		</tr>
	</thead>
	<tbody>
		<?php $i="odd"; foreach($model AS $m){ ?>
		<tr class="<?php echo $i;?>">
			<td><?php echo $m->ID; ?></td>
			<td><?php echo $m->FORM_ID; ?></td>
			<td><?php echo $m->CREATED_BY; ?></td>
			<td><?php echo $m->LAST_MODIFIED_BY; ?></td>
			<td><?php echo $m->CREATED_DATE; ?></td>
			<td><?php echo $m->LAST_MODIFIED_DATE; ?></td>
			<td class="button-column">
				<?php echo CHtml::link('View', array('view', 'form'=>$m->FORM_ID, 'entry'=>$m->ID)); ?>
				<?php echo CHtml::link('Edit', array('edit', 'form'=>$m->FORM_ID, 'entry'=>$m->ID)); ?>
				<?php echo CHtml::link('Delete',"#", array("submit"=>array('delete', 'form'=>$m->FORM_ID, 'entry'=>$m->ID), 'confirm' => 'Are you sure you want to delete this item?')); ?>
			</td>
		</tr>
		<?php if($i=='odd'){$i="even";}else{$i="odd";} } ?>
	</tbody>
</table>
