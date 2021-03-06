<?php
/**
 * Created by PhpStorm.
 * User: zhangxiao-pc
 * Date: 2016/2/25
 * Time: 16:44
 */

namespace common\models;


use yii\db\ActiveRecord;

class BaseModel extends ActiveRecord
{
    /*
     *根据指定条件批量返回数据,至少二维数据
     */
    public static function getDataByConditions($condition = [], $order = 'id desc', $limit = 10, $offset = 1, $select = '*'){
        $strConditions = [];
        if(!empty($condition)){
            foreach($condition as $key=>$con){
                if(is_int($key) && is_string($con)){
                    array_push($strConditions, $con);
                    unset($condition[$key]);
                }
            }
        }
        $query = self::find()->select($select)->where($condition);
        if(!empty($strConditions)){
            foreach($strConditions as $strCon){
                $query->andWhere($strCon);
            }
        }
        $query->orderBy($order);
        if($limit && $offset){
            $query->limit($limit)->offset(($offset - 1) * $limit);
        }elseif($limit){
            $query->limit($limit);
        }
        $infos = $query->asArray()->all();
        return $infos?$infos:[];
    }
    /*
     * 根据id返回单一数据
     */
    public static function getDataByID($id, $param = 'id'){
        if(!$id){
            return [];
        }
        $info = self::find()
            ->where([$param => $id, 'is_del' => 0])
            ->asArray()
            ->one();
        return $info?$info:[];
    }
    /*
     * 返回总数
     */
    public static function getCountByCondition($condition = []){
        $strConditions = [];
        if(!empty($condition)){
            foreach($condition as $key=>$con){
                if(is_int($key) && is_string($con)){
                    array_push($strConditions, $con);
                    unset($condition[$key]);
                }
            }
        }
        $query = self::find()->where($condition);
        if(!empty($strConditions)){
            foreach($strConditions as $strCon){
                $query->andWhere($strCon);
            }
        }
        $total = $query->count();
        return $total?$total:0;
    }
}