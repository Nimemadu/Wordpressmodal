<?php

?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX Form Submission</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="form-container">
        <form id="ceymulticall-form">
            <input type="text" name="name" placeholder="Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <button type="submit">Submit</button>
        </form>
    </div>

    <!-- Modal Structure -->
    <div id="ceymulticall-modal" class="ceymulticall-modal">
        <div class="ceymulticall-modal-content">
            <span class="ceymulticall-close">&times;</span>
            <p id="ceymulticall-modal-description"></p>
            <div id="ceymulticall-modal-buttons" class="ceymulticall-modal-buttons"></div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
