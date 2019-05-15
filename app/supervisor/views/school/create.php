<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\SchoolTree */

$this->title = 'Create School Tree';
$this->params['breadcrumbs'][] = ['label' => 'School Trees', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="school-tree-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'contentModel' => $schoolContentModel,
    ]) ?>

</div>
