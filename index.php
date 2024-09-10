<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code Generator</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center">
                <h1 class="mb-4">Professional QR Code Generator</h1>
                <p class="lead">Generate a QR code for any message or link. Just type it in the box below!</p>

                <!-- QR Code Generation Form -->
                <form id="qrForm" method="POST" action="gn.php">
                    <div class="form-group mb-3">
                        <input type="text" id="text" name="text" class="form-control" placeholder="Enter your text or URL" required>
                        <div class="invalid-feedback">Please enter some text.</div>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Generate QR Code</button>
                </form>

                <!-- Loading Spinner (hidden by default) -->
                <div id="loadingSpinner" class="spinner-border text-primary mt-3" style="display: none;" role="status">
                    <span class="visually-hidden">Generating QR Code...</span>
                </div>

                <!-- QR Code Result -->
                <div id="qrResult" class="mt-4">
                    <?php
                    if (isset($_GET['qr'])) {
                        echo "<h5>Here's your QR Code:</h5>";
                        echo "<img src='qr_codes/" . htmlspecialchars($_GET['qr']) . "' class='img-fluid' alt='QR Code'>";
                        echo "<a href='qr_codes/" . htmlspecialchars($_GET['qr']) . "' download class='btn btn-success mt-3'>Download QR Code</a>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
