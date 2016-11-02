<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Set Your Job Preferences Details';
$this->params['breadcrumbs'][] = $this->title;
?>

    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out your Job Preferences Details</p>

            
            <?php $form = ActiveForm::begin(['id' => 'form-preferences','action' => Yii::$app->getUrlManager()->createUrl('user/preferences')]); ?>
            
            
            
          <?= $form->field($model, 'functionalarea')->dropDownList(['IT Software-ApplicationProgramming' => 'IT Software-ApplicationProgramming',
          		'IT Software-Mainframe' => 'IT Software-Mainframe','IT Software-Mobile' =>'IT Software-Mobile','IT Software-System Programming' => 'IT Software-System Programming',
          		'IT Software-Telecom' => 'IT Software-Telecom','IT Hardware' => 'IT Hardware'],['prompt'=>'select your functionalArea']) ?>
             
              
          <?= $form->field($model, 'jobrole')->dropDownList(['Software Developer' => 'Software Developer','System Analyst' => 'System Analyst',
          		'Project Lead' => 'Project Lead','Testing Engineer' =>'Testing Engineer','Database Designer' => 'Database Designer',
          		'Product Manager' => 'Product Manager','System Admin' => ' System Admin'],['prompt'=>'select your jobrole']) ?>
            
            <?= $form->field($model, 'joblocation')->dropDownList(['Hyderabad/Secundrabad' => 'Hyderabad/Secundrabad','Banglore' => 'Banglore',
          		'Chennai' => 'Chennai','Mumbai' =>'Mumbai','Pune' => 'Pune',
          		'Gurgon' => 'Gurgon','Delhi' => ' Delhi'],['prompt'=>'select your joblocation']) ?>
          		  <?= $form->field($model, 'experience')->dropDownList(['Fresher' => 'Fresher','1 year' => '1 year',
          		'2 year' => '2 year','3 year' =>'3 year','4 year' => '4 year',
          		'5 year' => '5 year','6 year' => ' 6 year'],['prompt'=>'select your experience']) ?>
          		<?= $form->field($model, 'jobtype')->radioList(['fulltime'=>'fulltime','parttime'=>'parttime'],['prompt' =>'<---select jobtype--->']) ?>
            
             
             
              
               <?= $form->field($model, 'expectedsalary')->textInput(['autofocus' => true]) ?>
               
            
            
                <div class="form-group">
                
                    <?= Html::submitButton('Save', ['class' => 'btn btn-primary', 'name' => 'save-button']) ?>

                </div>
                   
               
<?php ActiveForm::end(); ?>
       


