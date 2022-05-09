<?php

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="formStyles.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="formStyles.css">

    <script src="https://code.jquery.com/jquery-3.6.0.js"
            integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <title>Charting Login</title>
</head>
<body style="background-image: linear-gradient(to bottom right, #143058, #061126);">

<div class="login-container">
    <div class="login-content">
        <div class="horizontal-group around">
            <img src="../assets/catalyst-logo-blue.png" alt="Catalyst Logo">
            <h1>Login</h1>
        </div>
        <div class="horizontal-group">
            <input type="text" id="login-username" style="height: 50%; width: 100%" placeholder="Username">
        </div>
        <div class="horizontal-group button-end">
            <input type="text" id="login-password" style="height: 50%;" placeholder="Password">
            <button type="button" class="login-submit glance-button">Submit</button>
        </div>
    </div>
</div>

<script>
    let loginButton = document.getElementsByClassName("login-submit")[0];
    loginButton.addEventListener("click", submitLogin);
    document.addEventListener("keydown", function(e) {
        if (e.key === 'Enter') {
            submitLogin();
        }
    })

    function submitLogin() {
        let loginInput = {
            "username": document.getElementById("login-username").value,
            "password": document.getElementById("login-password").value,
        }
        $.ajax({
            type: 'POST',
            url: '../auth.php',
            data: {loginData: JSON.stringify(loginInput)},
            success: function(response) {
                let decodedServRes = JSON.parse(response);
                if (decodedServRes["code"] === 1) {
                    window.location.href = "/Medical_Charting/get_data.php"
                } else {
                    console.log("Try Again");
                }
            }
        })
    }
</script>

</body>
</html>
