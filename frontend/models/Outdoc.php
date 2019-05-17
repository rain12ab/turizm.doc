<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "Outdoc".
 *
 * @property int $id
 * @property array $file
 * @property string $date
 * @property int $get_doc_id
 * @property int $user_id
 */
class Outdoc extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Outdoc';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'file', 'date', 'get_doc_id', 'user_id'], 'required'],
            [['id', 'get_doc_id', 'user_id'], 'integer'],
            [['file', 'date'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'file' => 'Files',
            'date' => 'Sanasi',
            'get_doc_id' => 'Kirish xatning raqami',
            'user_id' => 'Ijrochi',
        ];
    }
}
