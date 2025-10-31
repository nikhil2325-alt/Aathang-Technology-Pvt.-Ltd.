<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include("../include/conect.php");
?>


<?php
// Get form data
$name    = $_POST['name'];
$email   = $_POST['email'];
$phone   = $_POST['phone'];
$company = $_POST['company_name'];
$address = $_POST['company_address'];
$service = $_POST['service'];
$message = $_POST['message'];

// === SEND EMAIL ===
$to = "choturana2325@gmail.com";  // ⬅️ Change this to your email
$subject = "New Website Enquiry";

$body = "You have received a new enquiry:\n\n";
$body .= "Name: $name\n";
$body .= "Email: $email\n";
$body .= "Phone: $phone\n";
$body .= "Company Name: $company\n";
$body .= "Company Address: $address\n";
$body .= "Service: $service\n";
$body .= "Message:\n$message\n";

$headers = "From: $email";

// Send email
mail($to, $subject, $body, $headers);

// === SEND TO WHATSAPP (Redirect user) ===
$whatsapp_message = "New Enquiry%0A"
    ."Name: $name%0A"
    ."Email: $email%0A"
    ."Phone: $phone%0A"
    ."Company: $company%0A"
    ."Address: $address%0A"
    ."Service: $service%0A"
    ."Message: $message";

$whatsapp_number = "91 7654250019";  // ⬅️ Your WhatsApp number with country code

// Redirect to WhatsApp (user side)
echo "<script>
  alert('Thank you! Your enquiry has been submitted.');
  window.location.href='https://wa.me/$whatsapp_number?text=$whatsapp_message';
</script>";
?>
