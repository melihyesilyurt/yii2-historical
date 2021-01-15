<?php

namespace melihyesilyurt\historical\models;

use Yii;

/**
 * This is the model class for table "ulkeler".
 *
 * @property int $ulke_id
 * @property int $savaslar_savas_id
 * @property string|null $ulke_adi
 * @property int|null $kurulus_yili
 * @property int|null $yikilis_yili
 *
 * @property Savaslar $savaslarSavas
 */
class Ulkeler extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ulkeler';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['savaslar_savas_id'], 'required'],
            [['savaslar_savas_id', 'kurulus_yili', 'yikilis_yili'], 'integer'],
            [['ulke_adi'], 'string', 'max' => 255],
            [['savaslar_savas_id'], 'exist', 'skipOnError' => true, 'targetClass' => Savaslar::className(), 'targetAttribute' => ['savaslar_savas_id' => 'savas_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ulke_id' => 'Ulke ID',
            'savaslar_savas_id' => 'Savaslar Savas ID',
            'ulke_adi' => 'Ulke Adi',
            'kurulus_yili' => 'Kurulus Yili',
            'yikilis_yili' => 'Yikilis Yili',
        ];
    }

    /**
     * Gets query for [[SavaslarSavas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSavaslarSavas()
    {
        return $this->hasOne(Savaslar::className(), ['savas_id' => 'savaslar_savas_id']);
    }
}
