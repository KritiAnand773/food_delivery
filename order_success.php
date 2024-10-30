<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">
    <style>
        body {
            text-align: center;
            padding: 40px 0;
            background: #EBF0F5;
        }
        h1 {
            color: #88B04B;
            font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
            font-weight: 900;
            font-size: 40px;
            margin-bottom: 10px;
        }
        p {
            color: #404F5E;
            font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
            font-size: 20px;
            margin: 0;
        }
        .checkmark-container {
            background: white;
            padding: 60px;
            border-radius: 4px;
            box-shadow: 0 2px 3px #C8D0D8;
            display: inline-block;
            margin: 0 auto;
            position: relative;
        }
        .checkmark {
            color: #9ABC66;
            font-size: 100px;
            line-height: 200px;
            margin-left: -15px;
            animation: checkmarkAnimation 1s ease-in-out infinite;
            animation-delay: 0.5s; /* Delay the animation start */
        }
        @keyframes checkmarkAnimation {
            0% {
                transform: scale(0);
            }
            50% {
                transform: scale(1.2);
            }
            100% {
                transform: scale(1);
            }
        }
        #countdown {
            font-size: 24px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
<div class="checkmark-container">
    <div class="checkmark"style="border-radius:200px; height:200px; width:200px; background:#c2e490; margin:0 auto; color:#7ca441;">✓</div>
    <h1>Success</h1>
    <p>We received your Order request;<br/> we'll be in touch shortly!</p>
    <div id="countdown">Redirecting in 1:00</div>
    <br>
    <a href="main.php">Click Here go to Home page</a>
</div>

<script>
    // Redirect to main.php after 15 sec (60000 milliseconds)
    let countdown = 15; // 60 seconds

    function updateCountdown() {
        const minutes = Math.floor(countdown / 15);
        const seconds = countdown % 15;
        const countdownText = `${minutes}:${seconds.toString().padStart(2, '0')}`;
        document.getElementById("countdown").textContent = `Redirecting in ${countdownText}`;

        if (countdown === 0) {
            window.location.href = "main.php";
        } else {
            countdown--;
            setTimeout(updateCountdown, 1000);
        }
    }

    updateCountdown();
    
    // // Disable the back button
    // history.pushState(null, null, location.href='main.php');
    // window.onpopstate = function () {
    //     history.go(1);
    // };

    // Disable the back button
 // Replace the current history entry with the success page
 history.replaceState(null, null, location.href);

// Listen for the 'beforeunload' event to handle browser-specific behavior
window.addEventListener('beforeunload', function () {
    history.replaceState(null, null, location.href);
});

// Redirect to main.php after 15 seconds (15000 milliseconds)
setTimeout(function () {
    window.location.href = "main.php";
}, 15000);


</script>
</body>
</html>
