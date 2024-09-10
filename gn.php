<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $text = trim($_POST['text']); // Sanitize input

    if (!empty($text)) {
        // Include the phpqrcode library
        include('phpqrcode/qrlib.php');

        // Define the QR code directory
        $qrDir = 'qr_codes/';

        // Check if directory exists, if not create it
        if (!is_dir($qrDir)) {
            mkdir($qrDir, 0777, true);
        }

        // Define file name for the QR code
        $fileName = uniqid() . '.png';
        $filePath = $qrDir . $fileName;

        // Generate QR code
        QRcode::png($text, $filePath);

        // Redirect to display the QR code
        header('Location: index.php?qr=' . $fileName);
        exit();
    } else {
        // Handle case when input is empty
        header('Location: index.php?error=empty');
        exit();
    }
}
?>
