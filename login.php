<?php
    $user = new User();
    if($user->isLoggedIn()){    
?>
        <li><span style="color:#fff !important;">Welcome back </span><a href="<?php echo Config::get('svrInfo/path'); ?>account/index.php"><?php echo escape($user->data()->username);?></a>!</li>
        <li><a href="<?php echo Config::get('svrInfo/path'); ?>includes/login/logout.php">Log out</a></li>
<?php
    }else if(Session::exists('loginError') || !$user->isLoggedIn()){
?>
        <li class="dropdown <?php if(Session::exists('loginError')){ echo "open"; }?> ">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Login<b class="caret"></b></a>
            <div id='' class="dropdown-menu dropdwon-login">
                <form id='' action='' method='post' >
                    <fieldset >
                        <input class="button orange" type='hidden' name='token' value="<?php echo $token; ?>" />
                        <?php 
                            if(Session::exists('loginError')){
                        ?>
                            <div>
                                <p style="color:red; font-size:14px; margin-bottom: 0; letter-spacing: 1px;"><?php echo Session::flash('loginError'); ?> </p>
                            </div>
                        <?php
                            }
                        ?>
                        <div class='loginBoxes'>
                            <!-- <label for='username' >UserName</label><br/> -->
                            <input type='text' name='username' id='username' placeholder="Username" /><br/>
                            <span id='login_username_errorloc' class='error'></span>
                        </div>
                        
                        <div class='loginBoxes'>
                            <!-- <label for='password' >Password</label><br/> -->
                            <input type='password' name='password' id='password' size="" maxlength="50" autocomplete="off" placeholder="Password" /><br/>
                            <span id='login_password_errorloc' class='error'></span>
                        </div>

                        <div class="loginBoxes">
                            <label for="remember">
                                <input type="checkbox" name="remember" id="remember">Remember me
                            </label>
                        </div>
                         
                        <div class='loginBoxes'>
                            
                            <input class="button orange" type='submit' name='login' value='Login' />
                        </div>

                        <div class='short_explanation' >
                            <a style="color:#f59c3b !important;" href='reset-pwd-req.php'>Forgot Password?</a>
                        </div>
                    </fieldset>
                </form>
            </div>
        </li>
        <li class=""><a href="<?php echo Config::get('svrInfo/path'); ?>sign-up.php">Become a member</a></li>
<?php
    }
?>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/versebuster2/core/init.php';
    if('true' == Input::get('registered')){
        require_once($_SERVER['DOCUMENT_ROOT'] . "/versebuster2/php/header.php");
?>
<div class="row">
    <section class="login-form">
        <?php 
            if(Session::exists('loginError')){
        ?>
            <div>
                <p style="color:red; font-size:14px; margin-bottom: 0; letter-spacing: 1px;"><?php echo Session::flash('loginError'); ?> </p>
            </div>
        <?php
            }
        ?>        
            <form method="post" action="" role="login">
                            
                <div class="form-group">
                    <input type="email" name="username" required class="form-control" placeholder="Enter email or nickname" />
                    <span class="glyphicon glyphicon-user"></span>
                </div>
                
                <div class="form-group">
                    <input type="password" name="password" required class="form-control" placeholder="Enter password" />
                    <span class="glyphicon glyphicon-lock"></span>
                </div>
                
                <button type="submit" name="go" class="btn btn-primary btn-block">Login Now</button>
                
                <a href="#">Reset password</a> or <a href="#">create account</a> 
            </form>
    </section>
</div>
    <style rel="stylesheet">
.login-form {
    text-align: center;
    margin: 0 auto;

    max-width: 460px;
}
    .login-form > section {
        padding: 35px 35px 25px 35px;
        border-radius: 5px;
    }
    .login-form a {
        color: #fff;
    }
    .login-form img {
        display: block;
        margin: 0 auto;
        margin-bottom: 55px;
    }

form[role=login] {
    font: 14px/2.2em Lato, serif;
    color: #aaa;
}   
    form[role=login] input,
    form[role=login] > button {
        font-size: 15px;
        padding: 10px 30px;
    }
    form[role=login] input {
        color: #777;
        background: rgba(180,180,180,.9);
        border: none;
        height: 2.6em;
        padding: 10px 40px;
        border-radius: 3px;
        -webkit-box-shadow: inset 0 0 1px 1px rgba(150, 150, 150, .1);
           -moz-box-shadow: inset 0 0 1px 1px rgba(150, 150, 150, .1);
                box-shadow: inset 0 0 1px 1px rgba(150, 150, 150, .1);
    }
    form[role=login] > div {
        margin: 30px 0;
        position: relative; 
    }
    form[role=login] > button {
        margin-top: 15px;
        margin-bottom: 15px;
        background: #0c56a9;
        border: 1px solid #0c4584;
    }
    
.form-control + .glyphicon {
    position: absolute;
    left: 0;
    top: 14%;
    padding: 8px 0 0 17px;
    font-size: 15px;
    color: #757575;
}    

    </style>

<?php
        require_once("php/footer.php");
    }
?>