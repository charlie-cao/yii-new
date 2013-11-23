<?php
/* @var $this WordController */
/* @var $data Word */
?>
<tr>

        <td>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
        </td>
        
        <td>
	<?php echo CHtml::encode($data->new_word); ?>
        </td>

        <td>
	<?php echo CHtml::encode($data->ipa); ?>
        </td>

        <td>
	<?php echo CHtml::encode($data->from_lgt); ?>
        </td>

        <td>
	<?php echo CHtml::encode($data->to_lgt); ?>
        </td>

        <td>
	<?php echo CHtml::encode($data->trans); ?>
        </td>

        <td>
	<?php echo CHtml::encode($data->memo); ?>
        </td>

</tr>