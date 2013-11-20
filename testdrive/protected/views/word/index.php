<?php
/* @var $this WordController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'单词',
);

$this->menu=array(
	array('label'=>'创建单词', 'url'=>array('create')),
	array('label'=>'管理单词', 'url'=>array('admin')),
);
?>

<h1>单词本</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
