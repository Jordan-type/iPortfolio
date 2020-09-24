<?php

namespace frontend\controllers;

class ResumeController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionResume()
    {
        return $this->render('resume');
    }

}
