<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $appointmentDate = $_POST['appointment_date'];

    //$to = "info@cislab.com.au"; // Replace with actual recipient
	$to = "irfan27dec@mail.com"; // Replace with actual recipient
    $subject = "New Appointment Booking";
    $message = "A new appointment has been booked on: $appointmentDate";
    //$headers = "From: no-reply@ithubcanberra.com";
	$headers = "From: irfan27dec@yahoo.co.in";

    if (mail($to, $subject, $message, $headers)) {
        echo "success";
    } else {
        echo "error";
    }
}
?>
