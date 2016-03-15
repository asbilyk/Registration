<?php /* Smarty version Smarty-3.1.15, created on 2016-03-15 16:42:57
         compiled from "smarty\templates\user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:262615625e758c460b7-89797087%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9970711492dfc0a244bd4021058df053ce170d3' => 
    array (
      0 => 'smarty\\templates\\user.tpl',
      1 => 1458056234,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '262615625e758c460b7-89797087',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5625e758d43803_90016357',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5625e758d43803_90016357')) {function content_5625e758d43803_90016357($_smarty_tpl) {?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello, Acceptic!</title>
    <link rel="stylesheet" href="style/style.css">
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="js/user.js"></script>
</head>

<body>
    <div id="user_room">
        <div id="log_error" >
        </div> 
        <div class="fullform">
            <div class="header3">
            </div>    
            <div class="form">
                <form id="form-sign-up" class="styled" action="" method="post">
                    <fieldset>
                        <ul>
                            <li class="form-row"><label>Change your name:</label>
                                <input name="name" type="text" class="text-input required" id="log-name" placeholder="Ivan"/>
                                <input type="button"   class="btn-user-submit img-swap" id="btn-change-name"/>
                            </li>
                            <li class="form-row"><label>Change your password:</label>
                                <input name="password" type="password" id="password" class="text-input required password" placeholder="Your old password"/>
                                <input name="newpassword" type="password" id="newpassword" class="text-input required password" placeholder="Your new password"/>
                                <input name="newpasswordconfirm" type="password" id="newpasswordconfirm" class="text-input required password" placeholder="Confirm your new password"/>
                                <input type="button"   class="btn-user-submit img-swap" id="btn-change-password"/>
                            </li>
                            <li class="form-row"><label>Change your email:</label>
                                <input name="email" type="text" id="change-email" class="text-input required email" placeholder="ivan@mail.com"/>
                                <input type="button"   class="btn-user-submit img-swap" id="btn-change-email"/>
                            </li>
                            <li class="form-row"><label>Change your website:</label>
                                <input name="website" type="text" id="change-web" class="text-input required website" placeholder="ivan.com"/>
                                <input type="button"   class="btn-user-submit img-swap" id="btn-change-web"/>
                            </li>
                            <li class="form-row"><label>Change your tel. number:</label>
                                <input id="tele" name="tel" type="tel"  class="text-input required tel"  placeholder="+38XXXXXXXXXX"  /> 
                                <input type="button"   class="btn-user-submit img-swap" id="btn-change-tel"/>
                            </li>
                        </ul>
                        <a href="library/logout.php" id="exit">Log out</a>   
                    </fieldset>  
                </form>
            </div> 
        </div> 
    </div>
</body>
    
<?php }} ?>
