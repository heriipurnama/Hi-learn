<?php
/* @var $this PostController */
/* @var $data Post */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_post')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_post), array('view', 'id'=>$data->id_post)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_kategori')); ?>:</b>
	<?php echo CHtml::encode($data->id_kategori); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_user')); ?>:</b>
	<?php echo CHtml::encode($data->id_user); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('judul_post')); ?>:</b>
	<?php echo CHtml::encode($data->judul_post); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('isi_post')); ?>:</b>
	<?php echo CHtml::encode($data->isi_post); ?>
	<br />


</div>