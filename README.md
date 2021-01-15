# yii2-historical
Historical Module

# Kurulum
Modülü kurabilmek için öncelikle yii2 advanced projesini kurmanız gerekmektedir.
Proje kurulu ise terminale "composer require melihyesilyurt/yii2-historical" bu kodu yazmanız gerekmektedir.
Bu kod sayesinde packagistteki modülü kendi projenize yüklemiş bulunursunuz.
Modülü kurduktan sonra veritabanını kurmak gerekmektedir. Veritabanını kurmak için "php yii migrate/up --migrationPath=@vendor/melihyesilyurt/yii2-historical/src/migrations" yazmanız yeterlidir.
Bu işleri tamamladıktan sonra modülü çalıştırabilmek için son 1 aşama gerekiyor. Bu aşama ise modül nerede çalıştırılacak ise (Backend veya Frontend) onun içinde bulunan config dosyasının içindeki main.php deki modules kısmına  'historical' => [
                                                                  'class' => 'melihyesilyurt\historical\Module',
                                                                   ],
eklenmelidir. Modül artık çalışmaktadır.

#Modül-özeti
Modülümüzdeki migration 2 tablo içermektedir. Bu tablolardan biri Savaşlar hakkında bilgi içermektedir. Diğeri ise ülkeler hakkında bilgi içermektedir.
2 tablo arasındaki ilişki için 1 foreign key kullanmış bulunmaktayım.
Database de bulunan  tabloların yapıların daha net açıklanması için aşağıdaki fotoğrafları eklemiş bulunmaktayım;
