<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&family=Josefin+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="main.css">
    <title>Log in</title>
</head>
<body>
    <section id="login">
        <div class="container dflex">
            <form action="db-new-user.php" method="POST">
                <div class="form-wrapper">
                    <h3 style="margin-bottom: 35px">Please fill in:</h3>
                    <div>
                        <label for="login">Your login</label>
                        <input type="text" name="login" id="login">
                    </div>
                    <div>
                        <label for="password">Your password</label>
                        <input type="password" name="password" id="password">
                    </div>
                </div>
                <input type="submit" name="submit" value="Create account" class="add-input">
            </form>       
        </div>
    </section>
</body>
</html>