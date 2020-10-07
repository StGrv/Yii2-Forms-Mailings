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
                Yii::$app->session->setFlash('success', "The form has been sent successfully! We will contact you back as soon as possible.") ; 
                 
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
                 return $this->refresh() ; // clear the input fields
                //return $this->render('../site/index') ; 
            }
          else Yii::$app->session->setFlash('error', "Something went wrong! Please try again");
        }
        return $this->render('index', ['problems' => $problems ]);
    }

} // End of the controller class
 
