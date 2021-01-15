<?php

use yii\db\Migration;

class m210113_173632_war extends Migration
{
    public function safeUp()
    {
        $this->createTable('ulkeler', [//calisanlar
            'ulke_id' => $this->primaryKey(),//çalışan id
            'savaslar_savas_id' => $this->integer()->notNull(),//departmanlar departman id
            'ulke_adi' => $this->string(),
            'kurulus_yili' => $this->integer(),
            'yikilis_yili' => $this->integer(),
        ]);
        $this->createTable('savaslar', [
            'savas_id' => $this->primaryKey(),
            'savas_adi' => $this->string()->notNull(),
            'savas_yeri' =>  $this->string(),
            'olum_sayisi' =>  $this->integer(),
            'savas_tarihi' =>  $this->integer(),
        ]);
        $this->createIndex(
            'idx-ulkeler-savaslar_savas_id',
            'ulkeler',
            'savaslar_savas_id'
        );

        $this->addForeignKey(
            'fk-ulkeler-savaslar_savas_id',
            'ulkeler',
            'savaslar_savas_id',
            'savaslar',
            'savas_id',
            'CASCADE'
        );
    }
    public function safeDown()
    {
        $this->dropForeignKey(
            'fk-ulkeler-savaslar_savas_id',
            'ulkeler'
        );

        $this->dropIndex(
            'idx-ulkeler-savaslar_savas_id',
            'ulkeler'
        );

        $this->dropTable('ulkeler');
        $this->dropTable('savaslar');
    }
}
