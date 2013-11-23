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
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">单词列表</a></li>
                        <li><a href="#about">新增单词</a></li>
                        <li><a href="#contact">关于</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>
        <div class="container">


            <div id="header">
                <div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
            </div><!-- header -->

            <div id="mainmenu">
                <?php
                $this->widget('zii.widgets.CMenu', array(
                    'items' => array(
                        array('label' => 'Home', 'url' => array('/site/index')),
                        array('label' => 'About', 'url' => array('/site/page', 'view' => 'about')),
                        array('label' => 'Contact', 'url' => array('/site/contact')),
                        array('label' => 'Login', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
                        array('label' => 'Logout (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest)
                    ),
                ));
                ?>
            </div><!-- mainmenu -->

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
