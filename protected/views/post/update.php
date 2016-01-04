<?php
/* @var $this PostController */
/* @var $model Post */

$this->breadcrumbs=array(
	'Post'=>array('index'),
	$model->id_post=>array('view','id'=>$model->id_post),
	'Update',
);

$this->menu=array(
	array('label'=>'List Post', 'url'=>array('index')),
	array('label'=>'Create Post', 'url'=>array('create')),
	array('label'=>'View Post', 'url'=>array('view', 'id'=>$model->id_post)),
	array('label'=>'Manage Post', 'url'=>array('admin')),
);
?>

<h1>Update Post <?php echo $model->id_post; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>