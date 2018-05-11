<?php
class Group extends CActiveRecord {
	public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function tableName() {
        return "groups";
    }

    public function attributeLabels() {
        return array(
            "group_name" => "ชื่อกลุ่ม",
            "group_id" => "รหัสกลุ่ม"
        );
    }

    public function search() {
        $criteria = new CDbCriteria;
        return new CActiveDataProvider($this, array(
                    'criteria' => $criteria,
        ));
    }
    public static function getOptions($id = null) {
        $model = Group::model()->findAll();
        $arr = array();

        foreach ($model as $r) {
            $arr[$r->id] = $r->group_name;
        }
        return $arr;
    }
}
?>