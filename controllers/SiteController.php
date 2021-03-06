<?php

namespace app\controllers;

use yii\web\Controller;

class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionTalk()
    {
        return $this->render('talk');
    }

    public function actionMessage()
    {
        return $this->render('message');
    }

    public function actionSearch()
    {
        return $this->render('search');
    }

    public function actionMine()
    {
        return $this->render('mine');
    }

    public function actionAuthentication()
    {
        return $this->render('authentication');
    }

    public function actionCourse()
    {
        return $this->render('course');
    }

    public function actionStuauthen()
    {
        return $this->render('stuauthen');
    }

    public function actionTeacherauthen()
    {
        return $this->render('teacherauthen');
    }

    public function actionOrder()
    {
        return $this->render('order');
    }

    public function actionFavorite()
    {
        return $this->render('favorite');
    }

    public function actionStudenttask()
    {
        return $this->render('studenttask');
    }

    public function actionFilter()
    {
        return $this->render('filter');
    }

    public function actionCoursedetail()
    {
        return $this->render('coursedetail');
    }

    public function actionPersonaldata()
    {
        return $this->render('personaldata');
    }

    public function actionWallet()
    {
        return $this->render('wallet');
    }

    public function actionIntro()
    {
        return $this->render('intro');
    }
    public function actionOrderlist()
    {
        return $this->render('orderlist');
    }
    public function actionFilterteacher()
    {
        return $this->render('filterteacher');
    }
    public function actionOthersdata()
    {
        return $this->render('Othersdata');
    }
    public function actionTeachersearch()
    {
        return $this->render('Teachersearch');
    }
    public function actionTeacherdata()
    {
        return $this->render('Teacherdata');
    }
    public function actionPersonalset()
    {
        return $this->render('Personalset');
    }
    public function actionTask()
    {
        return $this->render('Task');
    }
    public function actionComment()
    {
        return $this->render('Comment');
    }
}

