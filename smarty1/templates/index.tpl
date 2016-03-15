<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test task Galych</title>
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
    <div id="registration" style="display:none;">
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
                                <input name="name" type="text" id="name" class="text-input required" placeholder="John"/>
                            </li>
                            <li class="form-row"><label>Tel.number:</label>
                                <input id="tele" name="tel" type="tel"  class="text-input required tel"  placeholder="+38XXXXXXXXXX"  />  
                            </li>
                            <li class="form-row"><label>Email:</label>
                                <input name="email" type="text" id="register-email" class="text-input required email" placeholder="john@mail.com"/>
                            </li>
                            <li class="form-row"><label>Website:</label>
                                <input name="website" type="text" id="register-web" class="text-input required website" placeholder="john.com"/>
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
