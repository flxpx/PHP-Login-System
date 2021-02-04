

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login System</title>

    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.6.15/dist/css/uikit.min.css" />
</head>
<body>



    <div class="uk section uk-container">
    
    <div class="uk-grid uk-child-width-1-3@s uk-child-width-1-1" uk-grid="">
    
    <form>
    <fieldset class="uk-fieldset js-login">

        <legend class="uk-legend">Login</legend>

        <div class="uk-margin">
            <input class="uk-input" type="email" required="required" placeholder="E-Mail">
        </div>

        <div class="uk-margin">
            <input class="uk-input" type="password" required="required" placeholder="Password">
        </div>

        <div class="uk-margin">
            <button class="uk-button uk-button-default" type="submit">LOGIN</button>
        </div>


    </fieldset>
</form></div>
    </div>

    <!-- jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.15/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.15/dist/js/uikit-icons.min.js"></script>


    
</body>
</html>