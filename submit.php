<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect data from the form
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $event_date = $_POST['event_date'];
    $event_time = $_POST['event_time'];
    $guests = $_POST['guests'];
    $package = $_POST['package'];
    $location = $_POST['location'];

    // Prepare the message for Messenger
    $message = urlencode("New Booking! Name: $name, Contact: $contact, Event Date: $event_date, Event Time: $event_time, Number of Guests: $guests, Package: $package, Location: $location");

    // Redirect to Messenger with the message
    header("Location: https://m.me/392693543932035?ref=$message");
    exit;
}
?>