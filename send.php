<?php
// if (isset($_POST['send'])) {
//     $to = 'arifsaja23022006@gmail.com';
//     $nama = $_POST['nama'];
//     $email = $_POST['email'];
//     $subject = $_POST['subject'];
//     $pesan = $_POST['pesan'];


//     if (mail($to, $email, $subject, $pesan, $nama)) {
//         echo "<script>alert('berhasil di kirim')</script>";
//         echo "<script>window.location = 'index.html'</script>";
//     } else {
//         echo "<script>alert('gagal di kirim')</script>";
//     }
// }

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$email = new PHPMailer(true);

try {
    // Konfigurasi server SMTP
    $mail->isSMTP();
    $mail->Host = 'smtp.example.com'; // Ganti dengan host SMTP Anda
    $mail->SMTPAuth = true;
    $mail->Username = 'your-email@example.com'; // Ganti dengan email Anda
    $mail->Password = 'your-password'; // Ganti dengan password email Anda
    $mail->SMTPSecure = 'tls'; // atau `ssl`
    $mail->Port = 587; // atau 465 jika menggunakan `ssl`

    // Pengaturan penerima dan pengirim email
    $mail->setFrom('your-email@example.com', 'Nama Pengirim');
    $mail->addAddress('example@example.com', 'Nama Penerima');

    // Konten email
    $mail->isHTML(true); // Set email format ke HTML
    $mail->Subject = 'Subject Email';
    $mail->Body = 'Ini adalah isi email dalam format <b>HTML</b>.';
    $mail->AltBody = 'Ini adalah isi email dalam format teks biasa jika HTML tidak didukung.';

    // Kirim email
    $mail->send();
    echo 'Email berhasil dikirim!';
} catch (Exception $e) {
    echo "Email gagal dikirim. Error: {$mail->ErrorInfo}";
}
