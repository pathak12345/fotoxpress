<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\User;
/* @var $this yii\web\View */
/* @var $searchModel common\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create User', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name',
            //'username',
            'email:email',
            'contact_number',
            /*[
                'attribute' => 'status',
                'value' => function($data){
                    return User::$statuses[$data->status];
                },
                'filter' => Html::ActiveDropdownList($searchModel, 'status', User::$statuses, ['class' => 'form-control', 'prompt' => 'Select status']),
            ],*/
            [
                'attribute' => 'role',
                'value' => function($data){
                    return isset(User::$backend_roles[$data->role]) ? User::$backend_roles[$data->role] : NULL ;
                },
                'filter' => Html::ActiveDropdownList($searchModel, 'role', User::$backend_roles, ['class' => 'form-control', 'prompt' => 'Select role']),
            ],
            'created_at:date',
            // 'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
