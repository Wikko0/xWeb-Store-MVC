<?php
/** $var $model \app\models\User */

$this->title = 'Login | XWEB';
$this->subtitle = 'Login';
?>

<?php $form = \app\core\form\Form::begin('', 'post', 'submit') ?>

<?php echo $form->field($model, 'email') ?>
<?php echo $form->field($model, 'password')->passwordField() ?>

    <div class="blue-button">
        <a href="#" id="form-submit" class="btn" onclick="document.getElementById('submit').submit()">Submit</a>
    </div>
<?php \app\core\form\Form::end() ?>