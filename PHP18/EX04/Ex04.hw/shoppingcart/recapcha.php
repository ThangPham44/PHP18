<?php
include_once('email.php');
//cấu hình thông tin do google cung cấp
$api_url     = 'https://www.google.com/recaptcha/api/siteverify';
$site_key    = '6LeXzZgUAAAAAGWfCDvg-o59osav6DD_f6q39aNy';
$secret_key  = '6LeXzZgUAAAAAKzhS5kdOxNFPq9caYMRYhxM6YbO';
  
//kiem tra submit form
if(isset($_POST['submit']))
{
    //lấy dữ liệu được post lên
    $site_key_post    = $_POST['g-recaptcha-response'];
      
    //lấy IP của khach
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $remoteip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $remoteip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $remoteip = $_SERVER['REMOTE_ADDR'];
    }
     
    //tạo link kết nối
    $api_url = $api_url.'?secret='.$secret_key.'&response='.$site_key_post.'&remoteip='.$remoteip;
    //lấy kết quả trả về từ google
    $response = file_get_contents($api_url);
    //dữ liệu trả về dạng json
    $response = json_decode($response);
    if(!isset($response->success))
    {
        echo 'Captcha khong dung';
    }
    if($response->success == true)
    {
       include_once('email.php');
    $subject='Xin cảm ơn đã đặt hàng';
    $name=$_POST['tenkh'];
    $email=$_POST['email'];
    ob_start();
    include_once('mail_checkout.php');
    $contents=ob_get_contents();
    ob_end_clean();
    send_email($email,$name,$contents,$subject);
    }else{
        echo 'Captcha khong dung';
    }
}
?>
<script src="https://www.google.com/recaptcha/api.js?hl=vi"></script>
<form action="" method="POST">
    <div class="g-recaptcha" data-sitekey="<?php echo $site_key?>"></div>
    <input type="submit" name="submit" value="submit">
</form>