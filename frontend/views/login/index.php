<?php 
    use yii\bootstrap\ActiveForm;
    use yii\helpers\Html;
?>
<?php $form = ActiveForm::begin()?>
   <?php 
        if($error){
            echo "<div class='alert alert-danger'>".$error."</div>";
        }
   ?>
    <?= $form->field($model, 'username')->textInput()?>
    <?= $form->field($model, 'password')->passwordInput()?>
    <?= Html::submitButton("Login", ['class'=>'btn btn-primary'])?>
<?php ActiveForm::end();?>