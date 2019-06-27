<?php
/* @var $this yii\web\View */

?>

<h3> <?= $parparent['title'] ?>,<?= $parent['title'] ?></h3>
<hr>

<div class="portlet light bordered">
    <div class="portlet-title  tabbable-line">
        <div class="actions">
            <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;" data-original-title="" title=""> </a>
        </div>
        <ul class="nav nav-tabs pull-left">

            <?php foreach ($parts as $index => $part): ?>
                <li class="<?= ($index == array_key_first($parts)) ? 'active' : '' ?>">
                    <a data-toggle="tab" href="#<?= $part['id'] ?>"><?= $part['title'] ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
    <div class="portlet-body">

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">


                <div class="tab-content">

                    <?php foreach ($parts as $index => $part): ?>
                        <div id="<?= $part['id'] ?>" class="tab-pane fade  <?= ($index == array_key_first($parts)) ? 'in active' : '' ?>">
                            <h3><?= $part['title'] ?></h3>
                            <p><?= $part['schoolContents']['body'] ?></p>
                        </div>

                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>