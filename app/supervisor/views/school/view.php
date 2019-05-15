<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\SchoolTree */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'School Trees', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="school-tree-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            [                      // the owner name of the model
                'label' => 'parent title',
                'value' => 'parent.title',
            ],
            [                      // the owner name of the model
                'label' => 'type',
                'value' =>$model->lableOfType(),
            ],

            'title',
            'description:text',
            'part_order',
            'section_order',
        ],
    ]) ?>

</div>
