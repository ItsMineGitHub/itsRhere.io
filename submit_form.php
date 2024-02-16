<?php
$name = $_POST['name'];
$rating = $_POST['rating'];
$notes = $_POST['notes'];

$to = "itsMehere2000@outlook.com"; 
$subject = "New Contact Form Submission";
$message = "Name: $name\n";
$message .= "Rating: $rating\n";
$message .= "Notes: $notes\n";
$headers = "From: $name <noreply@example.com>"; 

$mailSent = mail($to, $subject, $message, $headers);

if ($mailSent) {
    echo "😇شكرا لكم يا أصدقاء";
} else {
    echo "Oops!😁 أرجو المحاوله لاعاده كتب الملاحظة لانكم شكلو خبصتو شي بالغلط";
}
?>
