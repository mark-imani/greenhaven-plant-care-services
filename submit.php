<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $payment_message = htmlspecialchars($_POST['payment_message']);
    $full_name = htmlspecialchars($_POST['full_name']);
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email']);
    $address = htmlspecialchars($_POST['address']);
    $order_details = htmlspecialchars($_POST['order_details']);

    $to = "info@greenhaven.co.ke"; // your email address
    $subject = "New Order from $full_name";
    $message = "
      New order received:

      Name: $full_name
      Phone: $phone
      Email: $email
      Payment Message: $payment_message
      Address: $address
      Order Details: $order_details
    ";

    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you! Your order has been received successfully.";
    } else {
        echo "Sorry, something went wrong. Please try again.";
    }
}
?>
