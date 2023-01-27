<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "telaat".
 *
 * @property int $id
 * @property string|null $naam
 * @property string|null $klas
 * @property int|null $minuten
 * @property string|null $reden
 */
class Telaat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'telaat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'minuten'], 'integer'],
            [['naam', 'klas', 'reden'], 'string', 'max' => 255],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'naam' => 'Naam',
            'klas' => 'Klas',
            'minuten' => 'Minuten',
            'reden' => 'Reden',
        ];
    }
}
