<?php
/* @var $this WordController */
/* @var $data Word */
?>
<table>
    <tr>
        <td>单词</td>
        <td>音标</td>
        <td>词意</td>
        <td>记录</td>
    </tr>
</table>
<div class="view">

	<b>id:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('new_word')); ?>:</b>
	<?php echo CHtml::encode($data->new_word); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ipa')); ?>:</b>
	<?php echo CHtml::encode($data->ipa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('from_lgt')); ?>:</b>
	<?php echo CHtml::encode($data->from_lgt); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('to_lgt')); ?>:</b>
	<?php echo CHtml::encode($data->to_lgt); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('trans')); ?>:</b>
	<?php echo CHtml::encode($data->trans); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('memo')); ?>:</b>
	<?php echo CHtml::encode($data->memo); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('remember')); ?>:</b>
	<?php echo CHtml::encode($data->remember); ?>
	<br />

	*/ ?>

</div>