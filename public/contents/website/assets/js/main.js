const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    speed: 1000,

    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
    },


    // And if we need scrollbar
    scrollbar: {
        el: '.swiper-scrollbar',
    },
    autoplay: {
        delay: 1500,
    },

    waitForTransition: true,
});




$('.custom1').owlCarousel({
    animateOut: 'slideOutDown',
    animateIn: 'flipInX',
    items: 1,
    margin: 30,
    stagePadding: 30,
    loop: true,
    responsive: {
        // breakpoint from 0 up
        0: {
            items: 1,
        },
        // breakpoint from 480 up
        480: {
            items: 1,
        },
        // breakpoint from 768 up
        768: {
            items: 3,
        }
    },
    smartSpeed: 450
});


function googleTranslateElementInit() {
    new google.translate.TranslateElement({ pageLanguage: 'en', includedLanguages: 'bn,en', },

        'google_translate_element');
}


$(".a").click(function(b) {
    b.preventDefault();
    newLocation = this.href;
    $("body").fadeOut(1000, a)
});


$(document).ready(function() {
    // Add smooth scrolling to all links
    $("a").on('click', function(event) {

        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function() {

                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
            });
        } // End if
    });
});


function validate(val) {
    v1 = document.getElementById("fname");
    v2 = document.getElementById("lname");
    v3 = document.getElementById("email");
    v4 = document.getElementById("mob");
    v5 = document.getElementById("job");
    v6 = document.getElementById("ans");

    flag1 = true;
    flag2 = true;
    flag3 = true;
    flag4 = true;
    flag5 = true;
    flag6 = true;

    if (val >= 1 || val == 0) {
        if (v1.value == "") {
            v1.style.borderColor = "red";
            flag1 = false;
        } else {
            v1.style.borderColor = "green";
            flag1 = true;
        }
    }

    if (val >= 2 || val == 0) {
        if (v2.value == "") {
            v2.style.borderColor = "red";
            flag2 = false;
        } else {
            v2.style.borderColor = "green";
            flag2 = true;
        }
    }
    if (val >= 3 || val == 0) {
        if (v3.value == "") {
            v3.style.borderColor = "red";
            flag3 = false;
        } else {
            v3.style.borderColor = "green";
            flag3 = true;
        }
    }
    if (val >= 4 || val == 0) {
        if (v4.value == "") {
            v4.style.borderColor = "red";
            flag4 = false;
        } else {
            v4.style.borderColor = "green";
            flag4 = true;
        }
    }
    if (val >= 5 || val == 0) {
        if (v5.value == "") {
            v5.style.borderColor = "red";
            flag5 = false;
        } else {
            v5.style.borderColor = "green";
            flag5 = true;
        }
    }
    if (val >= 6 || val == 0) {
        if (v6.value == "") {
            v6.style.borderColor = "red";
            flag6 = false;
        } else {
            v6.style.borderColor = "green";
            flag6 = true;
        }
    }

    flag = flag1 && flag2 && flag3 && flag4 && flag5 && flag6;

    return flag;
}












//form validation




function blank_protection() {

    var name_field = document.forms['sign_up_form']['f_name'].value;
    var phone_field = document.forms['sign_up_form']['f_number'].value;
    var email_field = document.forms['sign_up_form']['email'].value;
    var age_field = document.forms['sign_up_form']['age'].value;
    var gender_field = document.forms['sign_up_form']['gender'].value;
    var interest_field_size = document.querySelectorAll('input[type="checkbox"]:checked').length;
    var country_field = document.getElementById('country');
    var country_field_text = document.getElementById('country').options[country_field.selectedIndex].value;
    let password_field = document.forms['sign_up_form']['password'].value;
    let confirm_password_field = document.forms['sign_up_form']['password2'].value;


    if (name_field == "" || name_field == " ") {
        document.getElementById('name_error').innerHTML = "Please enter your name";


    }

    if (phone_field == "" || phone_field == " ") {
        document.getElementById('phone_error').innerHTML = "Please enter your number";

    }

    if (email_field == "" || email_field == " ") {
        document.getElementById('email_error').innerHTML = "Please enter your email";

    }

    if (age_field == "" || age_field == " ") {
        document.getElementById('age_error').innerHTML = "Please enter your age";


    }

    if (gender_field == "" || gender_field == " ") {
        document.getElementById('gender_error').innerHTML = "Please select your geneder";
    } else {
        document.getElementById('gender_error').innerHTML = "";
    }



    if (interest_field_size == 0) {
        document.getElementById('interest_error').innerHTML = "Please select your interest";
    }

    if (country_field_text == "" || country_field_text == " ") {
        document.getElementById('country_error').innerHTML = "Please select your country";
    }

    if (password_field == "" || password_field == " ") {
        document.getElementById('password_error').innerHTML = "Please enter your password";
    }

    if (confirm_password_field == "" || confirm_password_field == " ") {
        document.getElementById('password_error2').innerHTML = "Please enter confirm your password";
    }

    return false;


}





function name_validation() {
    let name_field = document.forms['sign_up_form']['f_name'].value;

    var name_vali = /^([A-Za-z\s])+$/;
    var name_test = name_vali.test(name_field);

    if (name_field == "" || name_field == " ") {
        document.getElementById('name_error').innerHTML = "Please enter your name";
        document.getElementById('f_name').style.border = "2px solid red";
        return false;
    } else if (!name_test) {
        document.getElementById('name_error').innerHTML = "Please enter correct name";
        document.getElementById('f_name').style.border = "2px solid red";

        return false;
    } else if (name_field.length < 3) {
        document.getElementById('name_error').innerHTML = "Name length cann't be less than 3 alphabet";
        document.getElementById('f_name').style.border = "2px solid red";

        return false;
    } else {
        document.getElementById('name_error').innerHTML = "";
        document.getElementById('f_name').style.border = "2px solid green";
    }

}


function phone_validation() {

    let phone_field = document.forms['sign_up_form']['f_number'].value;
    var phone_vali = /^[0-9]+$/;
    var phone_vali2 = /^01/;
    var phone_test = phone_vali.test(phone_field);
    var phone_test2 = phone_vali2.test(phone_field);

    if (phone_field == "" || phone_field == " ") {
        document.getElementById('phone_error').innerHTML = "Please enter your phone number";
        document.getElementById('f_number').style.border = "2px solid red";
        return false;
    } else if (!phone_test) {
        document.getElementById('phone_error').innerHTML = "Phone number must be numeric value";
        document.getElementById('f_number').style.border = "2px solid red";
        return false;
    } else if (!phone_test2) {
        document.getElementById('phone_error').innerHTML = "Phone number must be start with 01";
        document.getElementById('f_number').style.border = "2px solid red";
        return false;
    } else if (phone_field.length != 11) {
        document.getElementById('phone_error').innerHTML = "Phone number must be 11 digit";
        document.getElementById('f_number').style.border = "2px solid red";
        return false;
    } else {
        document.getElementById('phone_error').innerHTML = "";
        document.getElementById('f_number').style.border = "2px solid green";
    }

}

function phone_validation2() {

    let phone_field = document.forms['sign_up_form']['f_number'].value;
    var phone_vali = /^[1-9]/;
    var phone_test = phone_vali.test(phone_field);

    if (phone_field == "" || phone_field == " ") {
        document.getElementById('phone_error').innerHTML = "Your number must be start with 01";
        document.getElementById('f_number').style.border = "2px solid red";
        return false;
    }


}

function nid_validation() {

    let nid_no = document.forms['sign_up_form']['nid_no'].value;
    var nid_vali = /^[0-9]+$/;
    var nid_vali2 = /^[1-9]/;
    var nid_test = nid_vali.test(nid_no);
    var nid_test2 = nid_vali2.test(nid_no);

    if (nid_no == "" || nid_no == " ") {
        document.getElementById('nid_error').innerHTML = "Please enter your nid number";
        document.getElementById('nid_no').style.border = "2px solid red";
        return false;
    } else if (!nid_test) {
        document.getElementById('nid_error').innerHTML = "NID number must be numeric value";
        document.getElementById('nid_no').style.border = "2px solid red";
        return false;
    } else if (!nid_test2) {
        document.getElementById('nid_error').innerHTML = "NID number can not be start with 0";
        document.getElementById('nid_no').style.border = "2px solid red";
        return false;
    } else if (nid_no.length != 10) {
        document.getElementById('nid_error').innerHTML = "NID number must be 10 digit";
        document.getElementById('nid_no').style.border = "2px solid red";
        return false;
    } else {
        document.getElementById('nid_error').innerHTML = "";
        document.getElementById('nid_no').style.border = "2px solid green";
    }

}





function email_validation() {

    let email_field = document.forms['sign_up_form']['email'].value;
    var email_vali = /^([0-9a-zA-Z]\.?)+[^\.]@([0-9a-zA-Z])+[\.]([0-9a-zA-Z]\.?)+([0-9a-zA-Z]?)[^\.]+$/;
    var email_test = email_vali.test(email_field);

    if (email_field == "" || email_field.value == " ") {
        document.getElementById('email_error').innerHTML = "Please enter your email";
        document.getElementById('email').style.border = "2px solid red";
        return false;
    } else if (!email_test) {
        document.getElementById('email_error').innerHTML = "Please enter correct email";
        return false;
    } else {
        document.getElementById('email_error').innerHTML = "";
        document.getElementById('email').style.border = "2px solid green";
    }

}


function password_validation() {

    let password_field = document.forms['sign_up_form']['password'].value;
    //var password_vali = /ddd/;
    //var password_test = password_vali.test(password_field);

    var casematching = new Array();

    casematching.push("[$@$!%*#?&]");
    casematching.push("[A-Z]");
    casematching.push("[0-9]");
    casematching.push("[a-z]");

    var numberofcase = 0;

    for (var i = 0; i < casematching.length; i++) {


        if (new RegExp(casematching[i]).test(password_field)) {
            numberofcase++;
        }

    }


    if (password_field == "" || password_field.value == " ") {
        document.getElementById('password_error').innerHTML = "Please enter your password";
        document.getElementById('email').style.border = "2px solid red";
        return false;
    } else if (password_field.length < 8) {
        document.getElementById('password_error').innerHTML = 'Password minimum length 8 digit suggested';
        return false;
    }
    // else if(password_field.length>=8){
    //     document.getElementById('password_error').innerHTML = '';
    //     return false;
    // }
    else if (password_field.length >= 8) {
        document.getElementById('password_error').innerHTML = '';

        switch (numberofcase) {
            case 0:
                document.getElementById('password_strength').innerHTML = "";
                break;

            case 1:
                document.getElementById('password_strength').innerHTML = "Very weak: Use symbol, number, capital and lowercase letter";
                document.getElementById('password_strength').style.color = "red";
                break;

            case 2:
                document.getElementById('password_strength').innerHTML = "Weak: Use symbol, number, capital and lowercase letter";
                document.getElementById('password_strength').style.color = "red";
                break;

            case 3:
                document.getElementById('password_strength').innerHTML = "Medium: Use more symbol, number, capital and lowercase letter";
                document.getElementById('password_strength').style.color = "#90EE90";
                break;

            case 4:
                document.getElementById('password_strength').innerHTML = "Strong: Great";
                document.getElementById('password_strength').style.color = "green";
                break;

        }
        if (password_field.length > 20) {

            document.getElementById('password_error').innerHTML = 'Password length bigger than 20 will hard to remember';
            return false;

        }

        return false;
    }





}

function confirm_password() {
    let password_field = document.forms['sign_up_form']['password'].value;
    let confirm_password_field = document.forms['sign_up_form']['password2'].value;
    if (password_field != confirm_password_field) {
        document.getElementById('password_error2').innerHTML = 'Password not matching';
    } else {
        document.getElementById('password_error2').innerHTML = '';
    }
}
















$(document).ready(function() {
    $('input').attr('autocomplete', 'off');
});