<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\SchoolTree */
/* @var $schoolContentModel common\models\SchoolContent */
/* @var $parent \phpDocumentor\Reflection\Types\Array_ */

$this->title = 'Update School Tree: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'School Trees', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="school-tree-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'update' => true,
        'contentModel' => $schoolContentModel,
        'parent' => $parent,
    ]) ?>

</div>
