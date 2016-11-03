<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "registration".
 *
 * @property integer $registerID
 * @property string $name
 * @property double $age
 * @property integer $phoneNo
 * @property string $dateCreate
 * @property string $dateModified
 */
class Registration extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'registration';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required', 'message' => 'Please enter name, the field cannot be blank'],
	    [['age'], 'required', 'message' => 'Please enter age, the fied cannot be blank'],
	    [['phoneNo'], 'required', 'message' => 'Please enter phone number, the field cannot be blank'],
            [['age'], 'number'],
            [['phoneNo'], 'integer'],
            [['dateCreate', 'dateModified'], 'safe'],
            [['name'], 'string', 'max' => 254],
            [['name', 'age', 'phoneNo'], 'unique', 'targetAttribute' => ['name', 'age', 'phoneNo'], 'message' => 'The combination of Name, Age and Phone No has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'registerID' => 'Register ID',
            'name' => 'Name',
            'age' => 'Age',
            'phoneNo' => 'Phone No',
            'dateCreate' => 'Date Create',
            'dateModified' => 'Date Modified',
        ];
    }
}
