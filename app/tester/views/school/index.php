<?php
/* @var $this yii\web\View */

?>
<h1>school/index</h1>
<ul>
        <?php foreach ($courses as $course): ?>
            <a href="<?=Yii::$app->urlManager->createUrl(['school/sections','id'=>$course['id']])?>">
                <li>
                    <?= $course['title'] ?>
                    <p> <?= $course['description'] ?></p>
                    <span><?= $course['passedCount'] ?></span>
                    /
                    <span><?= $course['sectionsCount'] ?></span>
                </li>
            </a>
<hr>
        <?php endforeach; ?>
</ul>
