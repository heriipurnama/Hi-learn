<?php
/* @var $this PostController */
/* @var $model Post */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'post-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_post'); ?>
		<?php echo $form->textField($model,'id_post'); ?>
		<?php echo $form->error($model,'id_post'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_kategori'); ?>
		<?php 
			  echo $form->dropDownList($model,'id_kategori',
			  	CHtml::listData(Kategori::model()->findAll(),
			  		'id_kategori','nama_kategori'),
			  		array("empty"=>"Pilih Kategori")
			  	);
		 ?>
		<?php echo $form->error($model,'id_kategori'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_user'); ?>
		<?php echo $form->textField($model,'id_user',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'id_user'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'judul_post'); ?>
		<?php echo $form->textField($model,'judul_post',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'judul_post'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'isi_post'); ?>
		<?php //echo $form->textField($model,'isi_post',array('size'=>60,'maxlength'=>100)); ?>
		<?php $this->widget('ext.editMe.widgets.ExtEditMe',
		 array(
				'model'=>$model,					
					'attribute'=>'isi_post',
				)); ?>
		<?php echo $form->error($model,'isi_post'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->