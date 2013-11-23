<?php
/* @var $this Word2Controller */
/* @var $data Word */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
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