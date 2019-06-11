<?php
/* @var $this yii\web\View */

?>
<ul>
    <h1> <?= $parentTitle ?></h1>
        <?php foreach ($sections as $section): ?>
            <a href="<?=Yii::$app->urlManager->createUrl(['school/parts','id'=>$section['id']])?>">
                <li>
                    <?= $section['title'] ?>
                    :title
                    <?= $section['status'] ?>
                    :status
                    <p> <?= $section['description'] ?></p>

                </li>
            </a>
<hr>
        <?php endforeach; ?>
</ul>
