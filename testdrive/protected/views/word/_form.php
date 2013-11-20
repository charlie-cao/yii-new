<?php
/* @var $this WordController */
/* @var $model Word */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'word-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'new_word'); ?>
		<?php echo $form->textField($model,'new_word',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'new_word'); ?> 采词方式 输入 照片ocr 划词 语音  批量
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ipa'); ?>
		<?php echo $form->textField($model,'ipa',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'ipa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'from_lgt'); ?>
		<?php echo $form->textField($model,'from_lgt',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'from_lgt'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'to_lgt'); ?>
		<?php echo $form->textField($model,'to_lgt',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'to_lgt'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'trans'); ?>
		<?php echo $form->textField($model,'trans',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'trans'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'memo'); ?>
		<?php echo $form->textField($model,'memo',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'memo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'remember'); ?>
		<?php echo $form->textField($model,'remember',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'remember'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->