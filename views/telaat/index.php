<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

use app\models\Telaat;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\TelaatSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Telaats';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="telaat-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Telaat', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],
        [
            'attribute' => 'id',
            'label' => 'ID',
        ],
        [
            'attribute' => 'naam',
            'label' => 'Naam',
        ],
        [
            'attribute' => 'klas',
            'label' => 'Klas',
        ],
        [
            'attribute' => 'minuten_te_laat',
            'label' => 'Minuten te laat',
        ],
        [
            'attribute' => 'reden_te_laat',
            'label' => 'Reden te laat',
        ],
        [
            'class' => ActionColumn::className(),
            'urlCreator' => function ($action, Telaat $model, $key, $index, $column) {
                return Url::toRoute([$action, 'id' => $model->id]);
            }
        ],
    ],
]); ?>



</div>

</body>
</html>