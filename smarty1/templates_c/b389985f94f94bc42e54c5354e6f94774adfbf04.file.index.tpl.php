<?php /* Smarty version Smarty-3.1.15, created on 2016-03-15 00:29:12
         compiled from "smarty\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:173225625e75d0c4083-35448216%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b389985f94f94bc42e54c5354e6f94774adfbf04' => 
    array (
      0 => 'smarty\\templates\\index.tpl',
      1 => 1457998045,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '173225625e75d0c4083-35448216',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5625e75d4682a5_86274840',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5625e75d4682a5_86274840')) {function content_5625e75d4682a5_86274840($_smarty_tpl) {?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello, Acceptic!</title>
    <link rel="stylesheet" href="style/style.css">
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="js/main.js"></script>
</head>

<body>
    <div id="authorization">
        <div id="log_error" >
        </div> 
        <div class="fullform">
            <div class="header">
            </div>    
            <div class="form">
                <form id="form-sign-up" class="styled" action="" method="post">
                    <fieldset>
                        <ul>
                            <li class="form-row"><label>Name:</label>
                                <input name="name" type="text" class="text-input required" id="log-name" placeholder="John"/>
                            </li>
                            <li class="form-row"><label>Password:</label>
                                <input name="password" type="password" id="password" class="text-input required password" placeholder="secretpassword"/>
                            </li>
                            <li class="button-row">
                                <input type="button"  alt="Sign Up" class="btn-submitlog img-swap" id="btn-submitlog"/>
                                <a href='index.php'><input type="button" alt="Cancel"  class="btn-cancel img-swap" id="btn-cancel"/></a>
                                <input type="button"   class="btn-reg img-swap" id="btn-reg"/>
                            </li>
                        </ul>
                    </fieldset>  
                </form>
            </div> 
        </div> 
        </div>
    </div>
    <div id="registration" style="">
        <div id="reg_error" >
        </div>    
         <div class="fullform">
              <div class="header2">
              </div>       
            <div class="form">
                <form id="form-sign-up" class="styled" action="" method="post">
                    <fieldset>
                        <ul>
                            <li class="form-row"><label>Name:</label>
                                <input name="name" type="text" id="name" class="text-input required" placeholder="Ivan Ivanov"/>
                            </li>
                            <li class="form-row"><label>Tel.number:</label>
                                <input id="tele" name="tel" type="tel"  class="text-input required tel"  placeholder="+38XXXXXXXXXX"  />  
                            </li>
                            <li class="form-row"><label>Email:</label>
                                <input name="email" type="text" id="register-email" class="text-input required email" placeholder="ivanov@mail.com"/>
                            </li>
                            <li class="form-row"><label>Website:</label>
                                <input name="website" type="text" id="register-web" class="text-input required website" placeholder="ivanov.com"/>
                            </li>
                            <li class="form-row"><label>Password:</label>
                                <input name="password" type="password" id="password-1" class="text-input required password" placeholder="secretpassword"/>
                            </li>
                            <li class="form-row"><label>Repeat Password:</label>
                                <input name="password" type="password" id="password-2" class="text-input required password" placeholder="secretpassword"/>
                            </li>
                            <li class="button-row">
                                <input type="button" src="images/btn_sign_up_off.png" alt="Sign Up" class="btn-submit img-swap" id="btn-submit"/>
                                <a href='index.php'><input type="button" src="images/btn_cancel.png" alt="Cancel"  class="btn-cancel img-swap" id="btn-cancel"/></a>
                                <input type="button"   class="btn-log img-swap" id="btn-back-log"/>
                            </li>
                        </ul>
                    </fieldset>  
                </form>
            </div> 
        </div>   
    </div>
</body>
</html>
<?php }} ?>
