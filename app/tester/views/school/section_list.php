<?php
/* @var $this yii\web\View */

?>
    <h3> <?= $parentTitle ?></h3>
<hr>
    <?php foreach ($sections as $section): ?>

        <div class="portlet light portlet-fit bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-pencil"></i>
                    <?= $section['title'] ?>
                </div>
                <div class="tools">
                    <a href="javascript:;" class="collapse"> </a>
                </div>

                <div class="actions">
                    <div class="btn-group open">
                    <?php
                    $link =Yii::$app->urlManager->createUrl(['school/quiz', 'id' => $section['id']]);
                    switch ($section['status']) {
                        case "Passed":
                            echo('<a class="btn green-haze btn-outline btn-circle btn-sm" href='.$link.'> آزمون دوباره');
                            break;
                        case "Failed":
                            echo('<a class="btn red-haze btn-outline btn-circle btn-sm" href='.$link.'> تلاش مجدد');
                            break;
                        default:
                            echo('<a class="btn grey btn-outline btn-circle btn-sm" href='.$link.'> آزمون');
                    }?>
                        </a>
                    </div>
                </div>
            </div>
            <div class="portlet-body">
                <div class="row">

                    <div class="col-md-6">

                        <div class="col-md-12">
                            <p> <?= $section['description'] ?> </p>
                            <?php
                            switch ($section['status']) {
                                case "Passed":
                                    break;
                                case "Failed":

                                    $link ='<div class="alert alert-warning">
                                                <p>لطفا قبل از شرکت در آزمون حتما تمام دروس مربوطه را مطالعه بفرمایید</p>
                                            </div>';
                                    echo($link);
                                    break;
                                default:
                                    $link ='<div class="alert alert-warning">
                                                <p>لطفا پس از مطالعه دروس در آزمون آنها شرکت نمایید</p>
                                            </div>';
                                    echo($link);
                            }?>
                        </div>
                    </div>


                    <div class="col-md-6 pull-right">
                        <div class="row">
                            <div class="col-md-12">
                                <a class="btn green btn-outline pull-right"
                                   href="<?= Yii::$app->urlManager->createUrl(['school/parts', 'id' => $section['id']]) ?>">
                                    مطالعه بخش ها
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    <?php endforeach; ?>
