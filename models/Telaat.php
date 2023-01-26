<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "telaat".
 *
 * @property int $id
 * @property string $naam
 * @property string $klas
 * @property string $minuten_te_laat
 * @property string $reden_te_laat
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
            [['naam', 'klas', 'minuten_te_laat', 'reden_te_laat'], 'required'],
            [['naam', 'klas', 'minuten_te_laat', 'reden_te_laat'], 'string', 'max' => 200],
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
