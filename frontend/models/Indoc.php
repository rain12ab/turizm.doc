<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "Indoc".
 *
 * @property int $id
 * @property string $our_number
 * @property string $guest_number
 * @property array $file
 * @property string $date_ijro
 * @property int $main_ijro
 * @property array $ijrochilar
 * @property int $status
 * @property string $created_at
 */
class Indoc extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Indoc';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'our_number', 'guest_number', 'file', 'date_ijro', 'main_ijro', 'status', 'created_at'], 'required'],
            [['id', 'main_ijro', 'status'], 'integer'],
            [['file', 'date_ijro', 'ijrochilar', 'created_at'], 'safe'],
            [['our_number', 'guest_number'], 'string', 'max' => 500],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'our_number' => 'Hujjar raqami',
            'guest_number' => 'Hujjat indeksi',
            'file' => 'Files',
            'date_ijro' => 'Ijro muddati',
            'main_ijro' => 'Asosiy ijrochi',
            'ijrochilar' => 'Ijrochilar',
            'status' => 'Status',
            'created_at' => 'Kiritilish vaqti',
        ];
    }
}
