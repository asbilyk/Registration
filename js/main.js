/**
 * Created by Алекс on 15.03.2016.
 */

$(document).ready(function() {
    //click for registration form showing
    $('.btn-reg').click(function(){
        $("#registration").show('slow');
        $("#authorization").hide('slow');
    })
    //click for turn-back to login form
    $('.btn-log').click(function(){

        $("#authorization").show('slow');
        $("#registration").hide('slow');
    })
    $('#reg_error ').click(function(){
        $("#reg_error").hide('slow');
    })
    $('#log_error ').click(function(){
        $("#log_error").hide('slow');
    })


    //function for displaying  errors
    function errordisplay(){
        // All validation complete - Check if any errors exist
        // If has errors
        if ($('span.error').length > 0) {
            $('span.error').each(function(){
                // Set the distance for the error animation
                var distance = 5;
                // Get the error dimensions
                var width = $(this).outerWidth();
                // Calculate starting position
                var start = width + distance;
                // Set the initial CSS
                $(this).show().css({
                    display: 'block',
                    opacity: 0,
                    right: -start+'px'
                })
                    // Animate the error message
                    .animate({
                        right: -width+'px',
                        opacity: 1
                    }, 'slow');
            });
        } else {
            $formId.submit();
        }
        // Prevent form submission
        e.preventDefault();
    }

//If register button was clicked
    $('.btn-submit').click(function(e){
        //setting values for inputs checking
        var $formId = $(this).parents('form');
        var formAction = $formId.attr('action');
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        var $error = $('<span class="error"></span>');
        var telReg = /^\+\d{12}$/;
        var websiteReg = /^(([\w-]+\.)+[\w-]{2,4})?$/;

        $('li',$formId).removeClass('error');
        $('span.error').remove();
        $('.required',$formId).each(function(){
            var inputVal = $(this).val();
            var $parentTag = $(this).parent();

            var email = $('#register-email').val();
            var tel = $('#tele').val();
            var website = $('#register-web').val();
            var name = $('#name').val();

            //trouble checking
            if(inputVal == ''){
                $parentTag.addClass('error').append($error.clone().text('Required Field'));
            }
            if($(this).hasClass('email') == true){
                if(!emailReg.test(inputVal)){
                    $parentTag.addClass('error').append($error.clone().text('Enter valid email'));
                }
            }
            if($(this).hasClass('tel') == true){
                if(!telReg.test(inputVal)){
                    $parentTag.addClass('error').append($error.clone().text('Enter valid phone number'));
                }
            }
            if($(this).hasClass('website') == true){
                if(!websiteReg.test(inputVal)){
                    $parentTag.addClass('error').append($error.clone().text('Enter valid website'));
                }
            }
            if($(this).hasClass('password') == true){
                var password = $('#password-1').val();
                var confpassword = $('#password-2').val();
                if(password != confpassword){
                    $parentTag.addClass('error').append($error.clone().text('Passwords must match'));
                }
            }
            //sending data to PHP
            $.ajax({
                type: 'POST',
                url: 'library/registration.php',
                data: {'name': name, 'password': password, 'confpassword':confpassword, 'email': email, 'tel':tel, 'website':website},
                response:'text',
                success: function (data) {
                    $('#reg_error').html(data);
                    $("#reg_error").show('slow');
                },
                error: function () {
                    $('#reg_error').text('Problems with server connection');
                }
            })
        });
        errordisplay();
    });

//If login button was clicked
    $('.btn-submitlog').click(function(e){
        var $formId = $(this).parents('form');
        var formAction = $formId.attr('action');
        var $error = $('<span class="error"></span>');
        var name = $('#log-name').val();
        var password = $('#password').val();
        //troubles checking
        $('li',$formId).removeClass('error');
        $('span.error').remove();
        $('.required',$formId).each(function(){

            var inputVal = $(this).val();
            var $parentTag = $(this).parent();
            //input filling check
            if(inputVal == ''){
                $parentTag.addClass('error').append($error.clone().text('Required Field'));
            }
            //sending data to PHP
            $.ajax({
                type: 'POST',
                url: 'library/authorization.php',
                data: {'name': name, 'password': password},
                response:'text',
                success: function (data) {
                    $('#log_error').html(data);
                    $("#log_error").show('slow');
                },
                error: function () {
                    $('#log_error').text('Problems with server connection');
                }
            })
        });
        errordisplay();
    });

    // Fade out error message when input field gains focus
    $('.required').focus(function(){
        var $parent = $(this).parent();
        $parent.removeClass('error');
        $('span.error',$parent).fadeOut();
    });
});