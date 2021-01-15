<?php

namespace melihyesilyurt\historical\models;

use Yii;

/**
 * This is the model class for table "savaslar".
 *
 * @property int $savas_id
 * @property string $savas_adi
 * @property string|null $savas_yeri
 * @property int|null $olum_sayisi
 * @property int|null $savas_tarihi
 *
 * @property Ulkeler[] $ulkelers
 */
class Savaslar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'savaslar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['savas_adi'], 'required'],
            [['olum_sayisi', 'savas_tarihi'], 'integer'],
            [['savas_adi', 'savas_yeri'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'savas_id' => 'Savas ID',
            'savas_adi' => 'Savas Adi',
            'savas_yeri' => 'Savas Yeri',
            'olum_sayisi' => 'Olum Sayisi',
            'savas_tarihi' => 'Savas Tarihi',
        ];
    }

    /**
     * Gets query for [[Ulkelers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUlkelers()
    {
        return $this->hasMany(Ulkeler::className(), ['savaslar_savas_id' => 'savas_id']);
    }
}
