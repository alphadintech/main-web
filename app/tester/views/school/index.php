<?php
/* @var $this yii\web\View */

?>
<h1>آکادمی کسب امتیاز</h1>
<hr>
<ul>

    <?php foreach ($courses as $course): ?>


        <div class="portlet box green">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-pencil"></i><?= $course['title'] ?> </div>
                <div class="tools">
                    <a href="javascript:;" class="collapse"> </a>
                </div>
            </div>
            <div class="portlet-body">

                <p> <?= $course['description'] ?> </p>
                <?php for ($i = 0; $i < $course['sectionsCount']; $i++) {
                    if ($course['passedCount'] > $i)
                        echo('<i class="font-green-meadow font-lg glyphicon glyphicon-star"></i>');
                    else
                        echo('<i class="font-green-meadow font-lg glyphicon glyphicon-star-empty"></i>');

                } ?>
                <div class="row">
                    <div class="col-md-12">
                        <a class="btn green btn-outline pull-right col-md-2"
                           href="<?= Yii::$app->urlManager->createUrl(['school/sections', 'id' => $course['id']]) ?>">
                            مطالعه بخش ها
                        </a>
                    </div>
                </div>
            </div>
        </div>


    <?php endforeach; ?>
</ul>
