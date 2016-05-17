<?php
/**
 * Created by PhpStorm.
 * User: kostik
 * Date: 17.05.2016
 * Time: 8:19
 */
namespace app\models;
use Yii;

class Figures extends \yii\redis\ActiveRecord
{
    /**
     * @return array the list of attributes for this record
     */
    public function attributes()
    {
        return ['id', 'name', 'pos','js_id'];
    }


    /**
     * Defines a scope that modifies the `$query` to return only active(status = 1) customers
     */
    public static function active($query)
    {
        $query->andWhere(['status' => 1]);
    }
}