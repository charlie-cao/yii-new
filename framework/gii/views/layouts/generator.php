<?php $this->beginContent('gii.views.layouts.main'); ?>
<div class="container">
	<div class="span-4">
		<div id="sidebar">
		<?php $this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'创建管理',
		)); ?>
			<ul>
				<?php foreach($this->module->controllerMap as $name=>$config): ?>
				<li><?php echo CHtml::link(ucwords(CHtml::encode($name).' generator'),array($name.'/index'));?></li>
				<?php endforeach; ?>
                                <li>数据表查看</li>
                                <li>配置修改</li>
                                <li>REST接口创建</li>
                                <li>授权管理</li>
                                <li>数据库分片</li>
                                <li>服务器管理</li>
                                <li>多语管理</li>
                                <li>自动化测试</li>
                                <li>部署</li>
                                <li>数据验证</li>
                                <li>日志分析</li>
                                <li>消息队列管理</li>
                                <li>缓存管理</li>
                                <li>移动应用创建</li>
                                <li>YII文档</li>
                                <li>YII社区</li>
                                
                                <li>翻译接口</li>
                                <li>支付接口</li>
                                <li>地图接口</li>
                                <li>社会化接口</li>
                                <li>成品模块 CMS </li>
                                
			</ul>
		<?php $this->endWidget(); ?>
		</div><!-- sidebar -->
	</div>
	<div class="span-16">
		<div id="content">
			<?php echo $content; ?>
		</div><!-- content -->
	</div>
	<div class="span-4 last">
		&nbsp;
	</div>
</div>
<?php $this->endContent(); ?>