<!DOCTYPE html>
<html>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tecrube";

// Bağlantı oluştur                                                 // Bu kod sizi başka bir sayfaya götürecektir.
$conn = mysqli_connect($servername, $username, $password, $dbname) or header("Location: error.php") and die("cannot connect")  ;

 
$adi = "osama";
       // Tüm geçersiz karakterleri adidan kaldır
$adi = filter_var($adi, FILTER_SANITIZE_STRING	);

// adi doğrula
if (!filter_var($adi, FILTER_SANITIZE_STRING	) === false) {
  echo("$adi geçerli bir adi");
} else {
  echo("$adi geçerli bir adi değil");
}
    
    
    
    
      $soyadi = "alkhalid";
       // Tüm geçersiz karakterleri soyadidan kaldır
$soyadi = filter_var($soyadi, FILTER_SANITIZE_STRING	);

// soyadi doğrula
if (!filter_var($soyadi, FILTER_SANITIZE_STRING	) === false) {
     echo"<br>";
  echo("$soyadi geçerli bir soyadi");
} else {
     echo"<br>";
  echo("$soyadi geçerli bir soyadi değil");
}
    
    
    
    
      $email = "SELECT FROM * USERS";
    
   // Tüm geçersiz karakterleri e-postadan kaldır
$email = filter_var($email, FILTER_SANITIZE_EMAIL);

// E-postayı doğrula
if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
     echo"<br>";
  echo("$email geçerli bir e-posta adresi");
} else {
     echo"<br>";
  echo("$email geçerli bir e-posta adresi değil");
}
    
    
    $sql = "INSERT INTO users (adi, soyadi, email)
VALUES ('$adi', '$soyadi', '$email')";

if (mysqli_query($conn, $sql)) {
    echo"<br>";
  echo "Yeni kayıt başarıyla oluşturuldu";
} else {
     echo"<br>";
  echo "Hata: " . $sql . "<br>" . mysqli_error($conn);
}
    
    
    
    

 

  
?>

</body>
</html>
<?php 
  //Data host ile bağlantı kurulurken herhangi bir programlama sorunu yaşamamak için bağlantı kapatılmalıdır.html sayfası kapatma etiketi olan </html>'den sonra bağlantıyı kapatıyoruz.
mysqli_close($conn);
?>