<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test task Galych</title>
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
                                <input name="name" type="text" class="text-input required" id="log-name" placeholder="John"/>
                                <input type="button"   class="btn-user-submit img-swap" id="btn-change-name"/>
                            </li>
                            <li class="form-row"><label>Change your password:</label>
                                <input name="password" type="password" id="password" class="text-input required password" placeholder="Your old password"/>
                                <input name="newpassword" type="password" id="newpassword" class="text-input required password" placeholder="Your new password"/>
                                <input name="newpasswordconfirm" type="password" id="newpasswordconfirm" class="text-input required password" placeholder="Confirm your new password"/>
                                <input type="button"   class="btn-user-submit img-swap" id="btn-change-password"/>
                            </li>
                            <li class="form-row"><label>Change your email:</label>
                                <input name="email" type="text" id="change-email" class="text-input required email" placeholder="john@mail.com"/>
                                <input type="button"   class="btn-user-submit img-swap" id="btn-change-email"/>
                            </li>
                            <li class="form-row"><label>Change your website:</label>
                                <input name="website" type="text" id="change-web" class="text-input required website" placeholder="john.com"/>
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
    
