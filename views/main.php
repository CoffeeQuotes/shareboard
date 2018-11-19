<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shareboard</title>
    <link rel="stylesheet" href="<?php echo ROOT_PATH;?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo ROOT_PATH;?>assets/css/style.css">
    <?php if($_SERVER['REQUEST_URI'] == '/project/users/register') : ?>
        <link rel="stylesheet" href="<?php echo ROOT_PATH;?>assets/css/register.css">
    <?php endif; ?>
    <?php if($_SERVER['REQUEST_URI'] == '/project/users/login') : ?>
        <link rel="stylesheet" href="<?php echo ROOT_PATH;?>assets/css/login.css">
    <?php endif; ?>    
</head>
<body>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-transparent  shadow-sm">
      <h5 class="my-0 mr-md-auto font-weight-normal text-dark text-register">Shareboard</h5>
      <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark text-register" href="<?php echo ROOT_URL; ?>">Home</a>
        <a class="p-2 text-dark text-register" href="<?php echo ROOT_URL; ?>shares">Shares</a>
       
      </nav>
      <?php if(isset($_SESSION['is_logged_in'])) : ?>
        <a class="btn btn-outline-success mr-2" href="<?php echo ROOT_URL; ?>">Welcome <?php echo $_SESSION['user_data']['name']; ?></a>
        <a class="btn btn-outline-danger" href="<?php echo ROOT_URL; ?>users/logout">Logout</a>
      <?php else : ?>  
        <a class="btn btn-outline-success mr-2" href="<?php echo ROOT_URL; ?>users/login">Sign In</a>
        <a class="btn btn-outline-primary" href="<?php echo ROOT_URL; ?>users/register">Sign up</a>
      <?php endif; ?>
    </div>
    <div class="container">
        <div class="row">
            <?php Messages::display(); ?>
            <?php require($view); ?>
        </div>    
    </div>
</body>
</html>
