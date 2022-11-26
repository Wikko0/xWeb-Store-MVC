<?php
/** @var $this \app\core\View */
/** @var $model \app\models\ContactForm */
use app\core\form\TextareaField;


$this->title = 'Contact | XWEB';
$this->subtitle = 'Contact';
?>
<?php $form = \app\core\form\Form::begin('', 'post', 'submit') ?>
    <div class="col-md-6">
        <fieldset>
            <?php echo $form->field($model, 'subject') ?>
        </fieldset>
    </div>

    <div class="col-md-6">
        <fieldset>
            <?php echo $form->field($model, 'email') ?>
        </fieldset>
    </div>

    <div class="col-md-12">
        <fieldset>
            <?php echo new TextareaField($model, 'body') ?>
        </fieldset>
    </div>

    <div class="blue-button">
        <a href="#" id="form-submit" class="btn" onclick="document.getElementById('submit').submit()">Send Message</a>
    </div>
<?php \app\core\form\Form::end() ?>