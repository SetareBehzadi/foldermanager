<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=SITE_TITLE?></title>
    <link rel="stylesheet" href="<?= BASE_URL?>assets/css/main.css">
</head>
<body>
<div class="wrapper">
    <form class="form-signin" id="form-login" method="post" action="<?= site_url('auth.php?action=login') ?>">
        <h2 class="form-signin-heading">Please login</h2>
        <input type="text" class="form-control" name="user_id" placeholder="id" required="" autofocus="" />
        <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
    </form>
</div>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'>

</script>
<script>
</script>

</body>
</html>


