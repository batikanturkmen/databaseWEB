<?php require_once "inc.php"; 
include("bootstrap.php");
?>

<!DOCTYPE html> 

<html>
    <head>
            <title>Cargo Company Web</title>
            <div id = "container" style = "width:100%">
                    <?php include("logo.php") ?>

                    <div id = "middle" style = "float:right; width: 25%;">
                            <?php 
                                if(!$_SESSION['login']) 
                                    include("loginMain.php");
                                else{
                                    echo '<br>';
                                    include("userinfo.php");
                                }
                            ?>
                    </div>
            </div>


            <?php include("menu.php") ?>
<div id = "container" style = "width:90%">
<div class="alert alert-info" style = "float:right; width: 80%;">

<h2>Standart Hizmetler</h2>

<h4>Yurtiçi taşıma</h4>

Bilkent Kargo’nun Türkiye geneli şubeleri arasında gerçekleşen standart gönderi hizmeti şehir içi ve şehirlerarası olup her gün teslim olan adreslere mücbir sebepler harici 600 km ye kadar 1 işgünü, 600 km üstü mesafelerde ise 4 işgünü olarak sağlanmaktadır. Taşıma hizmetinin yanı sıra adresten kargonun alınması, adrese kargonun teslim edilmesi, taşınan ürünün belli şartlar dahilinde sigortalanması, ambalaj hizmeti ve bilgilendirme hizmeti gibi çeşitli ek hizmetler de taşıma hizmet ile birlikte sunulabilmektedir. 

<h4>Adresten kargo alımı</h4> 

Talebiniz üzerine göndermek istediğiniz kargolarınızın belirteceğiniz adresten alınması hizmetidir. Şubelerimiz ve Çağrı Merkezi üzerinden yapacağınız talep ile adresinize yönlendirilecek olan kuryemiz adresinize gelecek ve yetki belgesini göstererek kargonuzu teslim alacaktır. Kargo teslimi için kuryemiz size “ambar tesellüm fişi” verecektir. Ambar tesellüm fişi üzerinde yazılı numara ile kargolarınızı takip edebilirsiniz. Pazar günü hariç haftanın diğer günlerinde kargonuzun adresten alınmasını isteyebilirsiniz. İşleyiş gereği alım saatleri şubelere göre farklılık gösterebileceği için gün içerisinde geç saatlere bırakılmaması uygun olacaktır.

<h4>Sigorta </h4>

Belli şartlar dahilinde taşınan kargolar, taşıma esnasında olabilecek kayıp ve hasarlara karşı Bilkent Kargo güvencesi ile tazmin edilmektedir. 

<h2>Teslimat</h2>

<h4>Adrese kargo teslimi</h4> 
Kargolarınız, kimlik ibraz etmesi karşılığı alıcısına faturada belirtilen adresinde kuryelerimiz tarafından teslim edilir. Adreste alıcının olmaması durumunda, adrese kargoyu getirdiğimize dair ihbar notu bırakılır ve kargo şubeye geri getirilir. Şubeye geri getirilen kargolar 3 işgünü içerisinde alıcı tarafından şubemize gidilerek teslim alınmalıdır. Aksi takdirde göndericinin bilgisi dahilinde kargo çıkış şubesine iade edilir. 

<h4>Şubede kargo teslimi </h4>
Göndericinin gönderi yapılırken talebi üzerine kargolarınız size en yakın şubeye gönderilebilir. Şubelerimize gidip kimliğinizi ibraz ederek kargonuzu teslim alabilirsiniz. 

<h4>Haberli teslimat </h4>
Göndericinin gönderi yapılırken kargo alıcısının kargo gönderiminden haberdar olduğunu ve gönderiye ilişkin şubelerimizin herhangi bir bildirim yapmalarına gerek olmadığını beyan etmesi üzerine kargo göndericinin belirteceği şubeye gönderilebilir. Şubelerimize gidip kimliğinizi ibraz ederek kargonuzu teslim alabilirsiniz. Şubeden teslim alınmayan kargolar 3 işgünü içerisinde göndericinin bilgisi dahilinde çıkış şubesine iade edilir. 

<h4>Telefon ihbarlı teslimat</h4> 
Göndericinin gönderi yapılırken talebi üzerine kargolarınız size en yakın şubeye gönderilebilir. Göndericiden alınan alıcı telefon numarası aranılarak kargonun şubemize ulaştığı bilgisi verilir. Bilgilendirme sonrası şubelerimize gidip kimliğinizi ibraz ederek kargonuzu teslim alabilirsiniz. 

<h2>Ekspres Hizmetler</h2>

<h4>Ekspres Güniçi</h4>

Hafta içi şubeler için belirlenmiş olan saatlerde yapılacak olan ekspres gönderiler uçuşun müsait olduğu şehirlere aynı gün içerisinde teslim edilebilmektedir. Şubelerimizin gün içi teslimat gönderilerini kabul ettikleri saatleri ve hizmetin sunulduğu şehirleri Çağrı Merkezimizden öğrenebilirsiniz. 

<h4>Ekspres 24 </h4>

Karayolu ile 48 saatte teslim edilebilecek olan kargoların gönderici talebi üzerine havayolu ile 24 saat içerisinde teslimatı sağlanabilmektedir. Hizmetin verildiği şehirler ve hizmet ayrıntıları için Çağrı Merkezimizden bilgi alabilirsiniz.

<h4>Ekspres Şehir İçi </h4>

Göndericinin talebi üzerine hafta içi sabah belirlenmiş olan saatlerde aynı şehir merkezi içerisinde alınan kargolar aynı gün alıcısına teslim edilebilmektedir. Hizmetin ayrıntılarını Çağrı Merkezimizden öğrenebilirsiniz.

<h5>Bu Sayfadaki bilgiler http://www.mng.com.tr/ adresinden kopyalanmistir.</h5>

</div>
</div>
