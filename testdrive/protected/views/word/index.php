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
<table class="table table-striped table-bordered table-hover">
    <tr>
        <th>单词</th>
        <th>音标</th>
        <th>词意</th>
        <th>记录</th>
    </tr>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>    
</table>

