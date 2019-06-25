<?php
/* @var $this yii\web\View */

?>
<h3>آکادمی کسب امتیاز</h3>
<hr>

    <?php foreach ($courses as $course): ?>


        <div class="portlet light portlet-fit bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-pencil"></i><?= $course['title'] ?> </div>
                <div class="tools">
                    <a href="javascript:;" class="collapse"> </a>
                </div>
                <div class="action">
                    <?php for ($i = 0; $i < $course['sectionsCount']; $i++) {
                        if ($course['passedCount'] > $i)
                            echo('<span class="badge  badge-success pull-right tooltips" data-container="body" data-placement="top" data-original-title="آزمون پاس شده" aria-describedby="tooltip731421">?</span>');
                        else
                            echo('<span class="badge pull-right tooltips" data-container="body" data-placement="top" data-original-title="آزمون پاس نشده" aria-describedby="tooltip731421">?</span>');

                    } ?>
                </div>
            </div>
            <div class="portlet-body">
                <div class="row">

                    <div class="col-md-6">

                        <div class="col-md-12">
                            <p> <?= $course['description'] ?> </p>
                        </div>
                    </div>


                    <div class="col-md-6 pull-right">
                        <div class="row">
                            <div class="col-md-12">
                                <a class="btn green btn-outline pull-right"
                                   href="<?= Yii::$app->urlManager->createUrl(['school/sections', 'id' => $course['id']]) ?>">
                                    مطالعه بخش ها
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    <?php endforeach; ?>
