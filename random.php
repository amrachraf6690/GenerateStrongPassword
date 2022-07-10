
<?php
$long = "1";
$pass = "<style='color: #fff;'>Your Password appears here";
if (isset($_POST['get'])){
    function generateRandomString() {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_-+=';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $_POST['long']; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

$pass = generateRandomString();
$long = $_POST['long'];
}


?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Generate Strong Password</title>
    <link rel="stylesheet" 
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"><link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@500&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <style>
body{
    background-color:black;
}

*
{
     font-family: 'Comfortaa', cursive;
}
.card
{
    width:80%;
    padding-bottom:12px;
    margin-bottom:20px;
}
.btn-success{
    width:50%
}
input{
    text-align:center;
    align-items:center;
}
i{
    padding:2px;
    width:18px;
}
</style>
  
  </head>
  <body>


<br>
<center>
<div class="card">
  <div class="card-header btn-primary">
    Let's Protect You
  </div>
  
<form action="" method="post" class="row g-3">
<center>Generate Strong Password</center>
<div class="col-auto">
    <label for="inputPassword2" class="visually-hidden">Length Of Password</label>
    <input type="number" name="long" class="form-control" value="<?php echo $long ?>" id="inputPassword2" placeholder="Length Of Password">
  </div>
  <div class="col-auto">
    <button type="submit" name="get" class="btn btn-primary mb-3">Generate Paassword</button>
    
  </div>

</form>
<center>    
<hr><div class="highlight"><pre><code class="html"><span class="nt"><?php echo $pass ?></span>  
</code></pre></div><hr></center></center>
  </div>
</div>
</center>

<center>
<div class="card">
  <div class="card-header btn-primary">
    Let's Be in touch
  </div>
  <div class="card-body">
    <h5 class="card-title">Follow Up My Social Media Accounts</h5>
    <p class="card-text">
<a href="http://facebook.com/amrachraf6690"><i class="fa-brands fa-facebook"></i></a>  
<a href="http://whatsapp.me/+201028751528"><i class="fa-brands fa-whatsapp"></i></a>  
<a href="http://instagram.com/amrachraf6690"><i class="fa-brands fa-instagram"></i></a> 
<a href="http://t.me/zae3m"><i class="fa-brands fa-telegram"></i></a> 
</p>
<h8 class="card-title">All Rights Reserved To: Amr Achraf / 2022</h58>
</div>
</center>


