
<?php
//Tambahkan Koneksi Databases


//menerima data dari form
$emailditerima = "revalinof57@gmail.com";
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$nomor = $_POST['nomor'];
$jenis = $_POST['jenis'];
$sebagai = $_POST['sebagai'];
$kronologi = $_POST['kronologi'];
$image = $_FILES['image']['tmp_name'];
$filename = $_FILES['image']['name'];

//mengirim ke databases
//Sesudah Menginput Di alihkan Ke halaman index

?>
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once "library/PHPMailer.php";
require_once "library/Exception.php";
require_once "library/OAuth.php";
require_once "library/POP3.php";
require_once "library/SMTP.php";


// Menghubungkan ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_db";

$conn =  new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Koneksi ke database gagal: " . $conn->connect_error);
}
$conn->close();

$mail = new PHPMailer;

//Enable SMTP debugging. 
$mail->SMTPDebug = 3;
//Set PHPMailer to use SMTP.
$mail->isSMTP();
//Set SMTP host name                          
$mail->Host = "tls://smtp.gmail.com"; //host mail server
//Set this to true if SMTP host requires authentication to send email
$mail->SMTPAuth = true;
//Provide username and password     
$mail->Username = "nikmataja03@gmail.com";   //nama-email smtp          
$mail->Password = "volc xxix hvxq ijme";           //password email smtp
//If SMTP requires TLS encryption then set it
$mail->SMTPSecure = "tls";
//Set TCP port to connect to 
$mail->Port = 587;

$mail->From = "nikmataja03@gmail.com"; //email pengirim
$mail->FromName = " Cerita Aja"; //nama pengirim

$mail->addAddress($emailditerima); //email penerima

$mail->isHTML(true);
$logoPath = 'logo.png';
$mail->addAttachment($logoPath, 'logo.png',);
$mail->addAttachment($image, $filename);
$mail->Subject =  "Bukti Laporan"; //subject
$mail->Body    = '<html>
<head>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 20px;
    }

    h1 {
      text-align: center;
      margin-bottom: 20px;
    }

    .logo {
      text-align: center;
      margin-bottom: 20px;
    }

    .logo img {
      max-width: 100px;
    }

    .invoice-details {
      margin-bottom: 40px;
    }

    .invoice-details table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    .invoice-details table th, .invoice-details table td {
      padding: 10px;
      border: 1px solid #ccc;
    }

    .invoice-details table th {
      background-color: #f7f7f7;
      text-align: left;
    }

    .invoice-details table td {
      text-align: center;
    }

    .greeting {
      margin-bottom: 20px;
    }

    .footer {
      text-align: center;
      margin-top: 40px;
    }
    .whatsapp-logo {
      width: 40px;
      height: 40px;
      display: inline-block;
      background-image: url("https://example.com/path/to/whatsapp-icon.png");
      background-size: cover;
      vertical-align: middle;
  }
  </style>
</head>
<body>
  <div class="logo">
    <img src="cid:logo.png"  alt="Logo">
  </div>

  <h1>Lapor Bu</h1>
  <a>Kini ada anak murid sman 1 porong yang sedang butuh bantuanmu:</a>

  <div class="invoice-details">
    <table>
      <tr>
        <th>Nama Lengkap</th>
        <td>' . $nama . '</td>
      </tr>
      <tr>
      <th>Kelas</th>
      <td>' . $kelas . '</td>
    </tr>
      <tr>
        <th>No telfon</th>
        <td>' . $nomor . ' Or  <a href="https://api.whatsapp.com/send?phone=' . $nomor . '" target="_blank" style=" color: blue;">Click Me!
        <p>
        
      </a></td>
      </tr>
      <tr>
        <th>Jenis Kelamin Pelapor</th>
        <td>' . $jenis . '</td>
      </tr>
      <tr>
      <th>Sebagai</th>
      <td>' . $sebagai . '</td>
    </tr>
     <tr>
      <th>Kronologi</th>
      <td>' . $kronologi . '</td>
    </tr>
    <tr>
    <th>Bukti foto</th>
    <td>' . $filename . '</td>
  </tr>
    </table>
  </div>

  <div class="greeting">
    <p>Kami harap bapak ibu bk akan segera menindak lanjuti kejadian ini</p>
  </div>

  <div class="footer">
    <p>© 2023 ekstra it. All rights reserved.</p>
  </div>
</body>
</html>'; //isi email
echo '<!DOCTYPE html>

';


$mail->AltBody = "PHP mailer"; //body email (optional)

if (!$mail->send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "Message has been sent successfully";
}


// Matikan instance PHPMailer

?>