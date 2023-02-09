<?php
namespace app\models;

use Yii;
use app\models\User;
class AccessRule extends \yii\filters\AccessRule {
    /** 
* @inheritdoc 
*/
    protected function matchRole($user)
    {
        if (empty($this->roles)) {
            return true;
        }
        if (!Yii::$app->user->isGuest) {
            foreach ($this->roles as $key => $value) {
                if ($value == Yii::$app->user->identity->role) {
                    return true;
                }
            }
        }
        return false;
    }
}