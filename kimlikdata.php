<?php

include_once 'includes/baglan.php';

session_start();

if ($_SESSION['GET_USER_SSID'] == "") {
    header('Location: auth/auth-login');
}

$GET_SESSION_TOKEN = $_SESSION['GET_USER_SSID'];

$CheckAccount = $db->query("SELECT * FROM users WHERE token = '$GET_SESSION_TOKEN'");
$CheckAccountCount = $CheckAccount->rowCount();

if ($CheckAccountCount != "1") {
    exit('Error: no token');
    die();
}


function CheckIP()
{
	if (!empty($_SERVER['HTTP_CLIENT_IP'])) 
	{
		$ip = $_SERVER['HTTP_CLIENT_IP'];
	} 
	elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
	{
		$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	} 
	else
	{
		$ip = $_SERVER['REMOTE_ADDR'];
	}
	
	return $ip;
}					

$TotalAccountQry = $db->query("SELECT * FROM users");
$TotalAccountCount = $TotalAccountQry->rowCount();

$TotalAdminQry = $db->query("SELECT * FROM users WHERE access_level >= 1");
$TotalAdminCount = $TotalAdminQry->rowCount();

$TotalBannedQry = $db->query("SELECT * FROM users WHERE access_level = '-1'");
$TotalBannedCount = $TotalBannedQry->rowCount();


$page_title = 'Kimlik Arşivi';
?>



<!--<div class="page-content">-->
<!--BAŞLANGIC-->
<br>
<br>
<div class="row">
    <div class="col-xl-12 col-md-6">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Kimlik Arşivi</h4>
                    <p class="mb-1">
                    <p>
                        Uygun bulduğunuz kimlik görselin altındaki indirme butonuna tıklayarak indirebilirsiniz.</br>
                    </p>
                    </p>
                    <div class="block-content tab-content">
                        <div class="tab-pane active" id="tc" role="tabpanel">
                            
                           
                            <div class="table-responsive">
                                <div class="uzunluk">
                                <img src="/kimlikler/retro1.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro1.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro2.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro2.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro3.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro3.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro4.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro4.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro5.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro5.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro7.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro7.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro8.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro8.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro9.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro9.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro10.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro10.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro11.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro11.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro12.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro12.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro13.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro13.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro14.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro14.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro15.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro15.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro16.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro16.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro17.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro17.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro18.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro18.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro19.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro19.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro20.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro20.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro21.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro21.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro22.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro22.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro23.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro23.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro24.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro24.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro25.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro25.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro26.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro26.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro27.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro27.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro28.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro28.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro29.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro29.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro30.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro30.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro31.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro31.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro32.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro32.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro33.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro33.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro34.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro34.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro35.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro35.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro36.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro36.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro37.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro37.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro38.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro38.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro39.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro39.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro40.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro40.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro41.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro41.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro42.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro42.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro43.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro43.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro44.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro44.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro45.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro45.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro46.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro46.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro47.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro47.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro48.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro48.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro49.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro49.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro50.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro50.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro51.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro51.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro52.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro52.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro53.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro53.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro54.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro54.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro55.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro55.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro56.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro56.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro57.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro57.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro58.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro58.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro59.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro59.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro60.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro60.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro61.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro61.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro62.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro62.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro63.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro63.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro64.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro64.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro65.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro65.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro66.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro66.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro67.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro67.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro68.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro68.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro69.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro69.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro70.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro70.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro71.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro71.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro72.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro72.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro73.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro73.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro74.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro74.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro75.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro75.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro76.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro76.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro77.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro77.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro78.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro78.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro79.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro79.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro80.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro80.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro81.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro81.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro82.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro82.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro83.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro83.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro84.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro84.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro85.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro85.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro86.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro86.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro87.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro87.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro88.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro88.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro89.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro89.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro90.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro90.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro91.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro91.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro92.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro92.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro93.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro93.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro94.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro94.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro95.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro95.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro96.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro96.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro97.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro97.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro98.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro98.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro99.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro99.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro100.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro100.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro101.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro101.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro102.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro102.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro103.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro103.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro104.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro104.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro105.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro105.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro106.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro106.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro107.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro107.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro108.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro108.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro109.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro109.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro110.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro110.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro111.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro111.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro112.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro112.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro113.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro113.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro114.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro114.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro115.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro115.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro116.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro116.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro117.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro117.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro118.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro118.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro119.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro119.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro120.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro120.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro121.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro121.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro122.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro122.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro123.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro123.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro124.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro124.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro125.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro125.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro126.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro126.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro127.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro127.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro128.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro128.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro129.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro129.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro130.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro130.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                <img src="/kimlikler/retro131.jpeg"  style="border: 5px solid;" width="20%"><br><a href="kimlikler/retro131.jpeg" download>Resim Dosyasını İndir</a><br><br>
                                


                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<style>
    
.a {
    width: %20;
    font-family: impact;
    background-color: #83d8ae;
    border-color: #83d8ae;
    color: #fff;
    font-size:15px;
}


</style>
<style>
body {
    background-image: linear-gradient(to right, #0099f7, #f11712);
}
</style>


    </div>
    <!--BİTİŞ-->
    <?php
    include('inc/footer_native.php');
    include('inc/footer_main.php');
    ?>
