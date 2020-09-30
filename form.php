<?php
use frontend\models\Problems ;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<div class="problems-form">
    
    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($problems, 'name')->label('Username:') ?>
        <?= $form->field($problems, 'email')->label('E-mail address:') ?>
        <?= $form->field($problems, 'address')->label('Address:') ?>
        <?= $form->field($problems, 'phonenum')->label('Phone number:') ?>
        <?= $form->field($problems, 'info')->label('Please specify your problem:') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div>
