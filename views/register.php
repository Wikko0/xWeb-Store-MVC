<?php
/** $var $model \app\models\User */

$this->title = 'Register | XWEB';
$this->subtitle = 'Register';
?>


<?php $form = \app\core\form\Form::begin('', 'post', 'submit') ?>
<div class="row">
    <div class="col-md-6"><?php echo $form->field($model, 'firstname') ?></div>
    <div class="col-md-6"><?php echo $form->field($model, 'lastname') ?></div>
</div>

<?php echo $form->field($model, 'email') ?>
<?php echo $form->field($model, 'password')->passwordField() ?>
<?php echo $form->field($model, 'confirmPassword')->passwordField() ?>

    <div class="blue-button">
        <a href="#" id="form-submit" class="btn" onclick="document.getElementById('submit').submit()">Submit</a>
    </div>
<?php \app\core\form\Form::end() ?>