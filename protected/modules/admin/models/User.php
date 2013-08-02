<?php
namespace modules\admin\models;
/**
 * Admin module User model
 * Class User
 * @package modules\admin\models
 */
class User extends \app\models\User
{
	/**
	 * Admin module rules
	 * @return array
	 */
	public function rules()
	{
		return array_merge(parent::rules(), array(
			array('username, password', 'required'),
			array('password', 'length', 'min' => 6, 'max' => 25)
		));
	}
}