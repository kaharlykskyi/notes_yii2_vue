<?php


namespace app\modules\api\models;


use app\models\User;
use app\modules\api\resources\UserResource;

class LoginForm extends \app\models\LoginForm
{
    /**
     * Finds user by [[username]]
     *
     * @return User|null
     */
    public function getUser()
    {
        if ($this->_user === false) {
            $this->_user = UserResource::findByUsername($this->username);
        }

        return $this->_user;
    }
}