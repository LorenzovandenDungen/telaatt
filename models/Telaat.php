<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "telaat".
 *
 * @property int $id
 * @property string|null $naam
 * @property string|null $klas
 * @property int|null $minuten_te_laat
 * @property string|null $reden_te_laat
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
            [['id', 'minuten_te_laat'], 'integer'],
            [['naam', 'klas', 'reden_te_laat'], 'string', 'max' => 255],
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
            'minuten_te_laat' => 'Minuten Te Laat',
            'reden_te_laat' => 'Reden Te Laat',
        ];
    }
}
