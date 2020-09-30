<?php
use frontend\models\Problems ;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<div class="problems-form">
    
    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($problems, 'name') ?>
        <?= $form->field($problems, 'email') ?>
        <?= $form->field($problems, 'address') ?>
        <?= $form->field($problems, 'phonenum') ?>
        <?= $form->field($problems, 'info') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div>