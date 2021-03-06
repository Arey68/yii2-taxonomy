<?php

/**
 * TaxonomyVocabulary model form view.
 *
 * @var \yii\base\View $this View
 * @var \yii\widgets\ActiveForm $form Form
 * @var TaxonomyVocabulary $model Model
 * @var \vova07\themes\admin\widgets\Box $box Box widget instance
 * @var array $statusArray Statuses array
 */

use artkost\taxonomy\Taxonomy;
use artkost\taxonomy\TaxonomyVocabulary;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-sm-12">
            <?= $form->field($model, 'title')
                ->textInput(['placeholder' => Taxonomy::t('admin', 'Title')]) ?>
            <?= $form->field($model, 'name')
                ->textInput(['placeholder' => Taxonomy::t('admin', 'Name'), 'disabled' => !$model->isNewRecord]) ?>
        </div>
    </div>

<?= Html::submitButton(
    $model->isNewRecord ? Taxonomy::t('admin', 'Create vocabulary') : Taxonomy::t('admin', 'Update vocabulary'),
    [
        'class' => $model->isNewRecord ? 'btn btn-primary btn-large' : 'btn btn-success btn-large'
    ]
) ?>

<?php ActiveForm::end(); ?>
