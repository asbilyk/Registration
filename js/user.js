/**
 * Created by Алекс on 15.03.2016.
 */
$(document).ready(function () {

    $('#log_error ').click(function(){
        $("#log_error").hide('slow');
    })



    $('#btn-change-name').click(function () {

        var name = $('#log-name').val();
        if (name == '' || name.length < 1) {
            var errortext = '<br>Please enter your new name';
        } else {
            $.ajax({
                type: 'POST',
                url: 'library/change.php',
                data: {'name': name},
                response: 'text',
                success: function (data) {
                    $('#log_error').html(data);
                    $("#log_error").show('slow');
                },
                error: function () {
                    $('#log_error').html('<br>Problems with server connection');
                }
            })
        }
        $('#log_error').html(errortext);
        $("#log_error").show('slow');
    });

    $('#btn-change-password').click(function () {
        var password = $('#password').val();
        var newpassword = $('#newpassword').val();
        var newpasswordconfirm = $('#newpasswordconfirm').val();
        if (password == '') {
            var errortext = '<br>Please enter your old password';;
        }
        else if (newpassword == '') {
            var errortext = '<br>Please enter your new password';
        }
        else if (newpasswordconfirm == '') {
            var errortext = '<br>Please confirm your new password';
        }
        else if (newpassword !== newpasswordconfirm) {
            var errortext = '<br>Your passwords doesnt match';
        }
        else {
            $.ajax({
                type: 'POST',
                url: 'library/change.php',
                data: {'password': password, "newpassword":newpassword, "newpasswordconfirm":newpasswordconfirm},
                response: 'text',
                success: function (data) {
                    $('#log_error').html(data);
                    $("#log_error").show('slow');
                },
                error: function () {
                    $('#log_error').html('<br>Problems with server connection');
                }
            })
        }
        $('#log_error').html(errortext);
        $("#log_error").show('slow');
    });

    $('#btn-change-email').click(function () {

        var email = $('#change-email').val();
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        if (email == '' || email.length < 1) {
            var errortext = '<br>Please enter your new email';
        }else if (!emailReg.test(email)){
            errortext = "<br> Please Enter valid email";
        } else {
            $.ajax({
                type: 'POST',
                url: 'library/change.php',
                data: {'email': email},
                response: 'text',
                success: function (data) {
                    $('#log_error').html(data);
                    $("#log_error").show('slow');
                },
                error: function () {
                    $('#log_error').html('<br>Problems with server connection');
                }
            })
        }
        $('#log_error').html(errortext);
        $("#log_error").show('slow');
    });

    $('#btn-change-tel').click(function () {
        var tel = $('#tele').val();
        var telReg = /^\+\d{12}$/;
        if (tel == '' ) {
            var errortext = '<br>Please enter your new telephone number';
        }else if (!telReg.test(tel)){
            errortext = "<br>Enter valid telephone number";
        } else {
            $.ajax({
                type: 'POST',
                url: 'library/change.php',
                data: {'tel': tel},
                response: 'text',
                success: function (data) {
                    $('#log_error').html(data);
                    $("#log_error").show('slow');
                },
                error: function () {
                    $('#log_error').html('<br>Problems with server connection');
                }
            })
        }
        $('#log_error').html(errortext);
        $("#log_error").show('slow');
    });

    $('#btn-change-web').click(function () {
        var website = $('#change-web').val();
        var websiteReg = /^(([\w-]+\.)+[\w-]{2,4})?$/;
        if (website == '' ) {
            var errortext = '<br>Please enter your new website';
        }else if (!websiteReg.test(website)){
            errortext = " <br>Enter valid website";
        } else {
            $.ajax({
                type: 'POST',
                url: 'library/change.php',
                data: {'website': website},
                response: 'text',
                success: function (data) {
                    $('#log_error').html(data);
                    $("#log_error").show('slow');
                },
                error: function () {
                    $('#log_error').html('<br>Problems with server connection');
                }
            })
        }
        $('#log_error').html(errortext);
        $("#log_error").show('slow');
    });

});