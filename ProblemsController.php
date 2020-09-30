<?php

namespace frontend\controllers ;

use frontend\models\Problems ;

use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

class ProblemsController extends \yii\web\Controller
{
    
    public function actionIndex()
    {
        $problems = new Problems() ;
        
        if ($problems->load(Yii::$app->request->post())) {
            if ($problems->validate()) {
                $problems->save() ;
                 
                \Yii::$app->mailer->compose()
                    ->setFrom($problems->email)
                    ->setTo('InputHere@gmail.com')
                    ->setSubject('Problems form')
                    ->setHtmlBody(
                    
                    'Customer name: ' .$problems->name .'<br>'
                    .'Customer address: ' .$problems->address .'<br>'
                    .'Customer phone number: ' .$problems->phonenum .'<br>'
                    .'Customer name: ' .$problems->info 
                    
                    )
                    ->send() ;
                //return $this->render('../site/index') ; 
            }
            
        else echo "Something went wrong" ;
            
        }
        return $this->render('index', ['problems' => $problems ]);
    }

} // End of the controller class