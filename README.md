# yii2-historical
İnternet programcılığı dersi için yapılmış olan, tarihi savaşları ve savaşan ülkeleri database de tutan bir modül. 

# Kurulum
Modülü kurabilmek için öncelikle yii2 advanced projesini kurmanız gerekmektedir.
Proje kurulu ise terminale

```
composer require melihyesilyurt/yii2-historical "dev-master"
 ```

bu kodu yazmanız gerekmektedir.
Bu kod sayesinde packagistteki modülü kendi projenize yüklemiş bulunursunuz.
Modülü kurduktan sonra veritabanını kurmak gerekmektedir. Veritabanını kurmak için 
```
php yii migrate/up --migrationPath=@vendor/melihyesilyurt/yii2-historical/src/migrations
 ```
yazmanız yeterlidir.
Bu işleri tamamladıktan sonra modülü çalıştırabilmek için son 1 aşama gerekiyor. Bu aşama ise modül nerede çalıştırılacak ise (Backend veya Frontend) onun içinde bulunan config dosyasının içindeki main.php deki modules kısmına  
```
'modules' => [
    ...
   'historical' => [
                  'class' => 'melihyesilyurt\historical\Module',
                ],
],
 ```
eklenmelidir. Modül artık çalışmaktadır.

# Modül Özeti
Modülümüzdeki migration 2 tablo içermektedir. Bu tablolardan biri Savaşlar hakkında bilgi içermektedir. Diğeri ise ülkeler hakkında bilgi içermektedir.
2 tablo arasındaki ilişki için 1 foreign key kullanmış bulunmaktayım.
Database de bulunan  tabloların yapıların daha net açıklanması için aşağıdaki fotoğrafları eklemiş bulunmaktayım;
<img src="https://github.com/melihyesilyurt/yii2-historical/blob/main/photos/savaslardb.png?raw=true" />
<img src="https://github.com/melihyesilyurt/yii2-historical/blob/main/photos/ulkelerdb.png?raw=true" />


Derslerde öğrenmiş olduğum html ile geliştiriğim modül ana sayfamda ise 2 farklı buton bulunmaktadır. Bu butonlara tıklandığında ise içinde yönlendirdiğim indexlere gitmektedir.
Ana sayfaya gitmek için bu linki kullanmak yeterlidir: "http://advanced/backend/web/index.php?r=historical/default/index"
<img src="https://github.com/melihyesilyurt/yii2-historical/blob/main/photos/index.png" />

Ana sayfadan yönlendirdiğim sayfaları ise gii ile oluşturup ekstra düzenlemeler yapmıştım. Bu sayfalarda ise database'e veri ekleyip çıkarma özellikleri yapılabilmekte, ayrıca istenilen verinin arama işlemleri yapılabilmektedir. 

<img src="https://github.com/melihyesilyurt/yii2-historical/blob/main/photos/savaslarindex.png?raw=true" />
<img src="https://github.com/melihyesilyurt/yii2-historical/blob/main/photos/ulkelerindex.png?raw=true" />
