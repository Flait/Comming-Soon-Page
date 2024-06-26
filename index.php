<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coming Soon</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?php
    if (isset($_SESSION['message'])) {
        echo "<div class='flash-message'>" . $_SESSION['message'] . "</div>";
        unset($_SESSION['message']);
    }
    ?>
    <header>
        <img src="images/logo.png" alt="Logo" class="logo">
        <div class="price" id="price">Cena: <b>...</b> BTC / USD</div>
    </header>
    <main>
        <div class="content">
            <div class="countdown" id="countdown">11 dní : 16 hodin : 23 minut</div>
            <h1>Už se nemůžete dočkat? Brzy budeme&nbsp;live...</h1>
            <div class="newsletter">
                <form action="php/subscribe.php" method="POST">
                    <label for="email">Přihlášení k newsletteru</label>
                    <div class="input-container">
                        <input type="email" id="email" name="email" placeholder="Email">
                        <button type="submit">Přihlásit</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="rocket">
            <img src="images/rocket.png" alt="Rocket">
        </div>
    </main>
    <footer>
        <div class="social-icons">
            <a href="#"><img src="images/socials/facebook.png" alt="Facebook"></a>
            <a href="#"><img src="images/socials/twitter.png" alt="Twitter"></a>
            <a href="#"><img src="images/socials/snapchat.png" alt="Snapchat"></a>
            <a href="#"><img src="images/socials/instagram.png" alt="Instagram"></a>
            <a href="#"><img src="images/socials/linkedin.png" alt="LinkedIn"></a>
            <a href="#"><img src="images/socials/github.png" alt="GitHub"></a>
        </div>
        <div class="copyright">
            © Copyright Test s.r.o. | Všechna práva vyhrazena
        </div>
    </footer>
</body>
</html>
<script src="js/countdown.js"></script>
<script src="js/btcPrice.js"></script>