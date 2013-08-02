<?php
namespace modules\admin\controllers;
use \modules\admin\models as models;
class DefaultController extends \modules\admin\components\Controller
{
	public function actionIndex()
	{
		$user = new models\User;
		if (\Yii::app()->request->isPostRequest)
		{
			$user->setAttributes(\Yii::app()->request->getPost(get_class($user)));
			if ($user->validate())
			{
				$this->redirect('aloha');
			}
		}
		$this->render('index', array(
			'model' => $user
		));
	}

	public function actionAloha()
	{
		$this->render('aloha');
	}
}