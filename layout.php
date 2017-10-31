<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
	<style type="text/css">
    .container{
        width: 700px;
        text-align: center;
    }
    .wrapper{
        box-sizing: border-box;
        border: 2px solid #dfbf9f;
        padding-left: 25px;
        padding-right: 25px;
        padding-bottom: 30px;
        background-color: hsla(290,60%,70%,0.3);
    }	
    h1{
        margin-bottom: 50px;
        margin-top: 30px;
        text-shadow: 4px 4px 8px red;
    }
    .btn btn-secondary{
        width: 170px;
    }
    h2{
        margin-top: 40px;
        text-shadow: 4px 4px 8px red;
        margin-bottom: 40px;
    }
    .captcha{
        text-align: center;

    }
    .comment{
        text-align: center;
    }
    footer{
        margin-top: 200px;
        margin-bottom: 40px;
        text-align: center;
    }
	</style>
		<title>Document</title>
</head>
<body>
    <div class="container">
        <div class="wrapper">
	<h1>Register form</h1>
		 <!--<b><?=$message?></b>-->
    <form method='post' action="">
        <div class="form-group">
            <label for="name">Write your name:</label>
        <input type="text" class="form-control" id="name" name="name"  placeholder='Name' value='<?=requestPost('name') ?>'>
    </div>
    <div class="form-group">
        <label for="email">Write your correct e-mail:</label>
        <input type="email" class="form-control" id="email" name="email"  placeholder='Email' value='<?=requestPost('email') ?>' >
    </div>
    <div class="form-group">
        <label for="comment">Your comments:</label>
        <textarea class="form-control"  rows="5" id="comment" placeholder='For notes' name="message"><?=requestPost('message') ?></textarea>
    </div> 
    <div class="form-group">
        <label for="number">Write your secure number:</label>
        <input type="text" class="form-control" name="user_security_number" placeholder='secure number'>
        <input type="hidden" name="security_number" value="<?=$securityNumber?>">
    </div>
        <input type="submit" name="submit" class="btn btn-secondary" value="Submit">
    </form>
    <form name="reg" action="reg.php" method="post">
        <div class="form-group">
  <img src = "captcha.php">
  <input type = "text" name = "kapcha">
  <input type = "submit" value = "Регистрация">
</div>
</form>
    <!--<img src="/form/captcha.php?number=<?=$securityNumber?>">-->
    </div>
    <h2>Comments</h2>
    <?php foreach ($comments as $comment) : ?>
        <div class='comment'>
            <h3><?=$comment['name']?></h3>
            <a href="?action=delete&amp;id=<?=$comment['id']?>">Delete</a>
            <br>
            <?=$comment['message']?> 
            <i><?=$comment['created'] ?></i>
            <br>
        </div>
    </div>
</div>
    <?php endforeach ?>	
    <footer>&copy; All copyrights belong to me 
            </footer>

</body>
</html>