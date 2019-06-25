<?php
/* @var $this yii\web\View */

?>


<div class="portlet light portlet-fit bordered">
    <div class="portlet-title">
        <div class="caption">
            <?= $parparent['title'] ?>,<?= $parent['title'] ?>
            <i class="fa fa-pencil"></i>
        </div>
        <div class="tools">
            <a href="javascript:;" class="collapse"> </a>
        </div>
    </div>
    <div class="portlet-body">

        <div class="row">
            <div class="col-md-9 col-sm-9 col-xs-9">


                <div class="tab-content">

                    <?php foreach ($parts as $index => $part): ?>
                        <div id="<?= $part['id'] ?>" class="tab-pane fade  <?= ($index == array_key_first($parts)) ? 'in active' : '' ?>">
                            <h3><?= $part['title'] ?></h3>
                            <p><?= $part['schoolContents']['body'] ?></p>
                        </div>

                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-3">

                <ul class="nav nav-tabs tabs-right">

                    <?php foreach ($parts as $index => $part): ?>
                        <li class="<?= ($index == array_key_first($parts)) ? 'active' : '' ?>">
                            <a data-toggle="tab" href="#<?= $part['id'] ?>"><?= $part['title'] ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</div>