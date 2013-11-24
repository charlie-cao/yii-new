<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="记单词">
        <meta name="author" content="charlie">

        <link href="<?php echo Yii::app()->request->baseUrl; ?>/bootstrap3/css/bootstrap.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/bootstrap3/js/bootstrap.min.js"></script>

        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    </head>

    <body>
        <div class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><?php echo CHtml::encode($this->pageTitle); ?></a>
                </div>
                <div class="navbar-collapse collapse">
                    <?php
                    $this->widget('zii.widgets.CMenu', array(
                        'htmlOptions' => array('class' => 'nav ace-nav'),
                        'items' => array(
                            array('label' => '单词列表', 'url' => array('/site/index')),
                            array('label' => '新增单词', 'url' => array('/site/contact')),
                            array('label' => '关于', 'url' => array('/site/page', 'view' => 'about')),
                            array('label' => '登录', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
                            array('label' => '退出 (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest)
                        ),
                    ));
                    ?>
                </div><!--/.nav-collapse -->
            </div>
        </div>
        
        <div class="container">
            <?php if (isset($this->breadcrumbs)): ?>
                <?php
                $this->widget('zii.widgets.CBreadcrumbs', array(
                    'links' => $this->breadcrumbs,
                ));
                ?><!-- breadcrumbs -->
            <?php endif ?>
            <?php echo $content; ?>
        </div><!-- page -->

    </body>
</html>
