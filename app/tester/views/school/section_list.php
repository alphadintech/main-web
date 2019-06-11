<?php
/* @var $this yii\web\View */

?>
<h1>school/index</h1>
<ul>
        <?php foreach ($sections as $section): ?>

                <li>
                    <a href="<?=Yii::$app->urlManager->createUrl(['school/parts','id'=>$section['id']])?>">
                    <?= $section['title'] ?>
                    :title
                    </a>
                    <?= $section['status'] ?>
                    :status
                    <a href="<?=Yii::$app->urlManager->createUrl(['school/quiz','id'=>$section['id']])?>">
                      QuizLink
                    </a>
                    <p> <?= $section['description'] ?></p>

                </li>

<hr>
        <?php endforeach; ?>
</ul>
