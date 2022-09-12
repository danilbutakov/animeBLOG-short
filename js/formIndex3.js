"use strict";

let form3 = document.querySelector('.js-form3'),
    formInputs3 = document.querySelectorAll('.js-input3'),
    inputEmail3 = document.querySelector('.js-input-email3');

    function validateEmail(email) {
        let re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(String(email).toLowerCase());
    }   

    function validatePassword(password) {
        let re2 = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[^\w\s]).{6,}/;
        return re2.test(String(password));
    }

    form3.onsubmit = function () {
        let emailVal = inputEmail3.value,
            emptyInputs = Array.from(formInputs3).filter(input => input.value === '');

            formInputs3.forEach(function (input) {
                if (input.value === '') {
                    input.classList.add('error');
                } else {
                    input.classList.remove('error');
                    return false;
                }
            });

            

            if(!validateEmail(emailVal)) {
                console.log('email not valid');
                inputEmail3.classList.add('error');
                return false;
            } else {
                inputEmail3.classList.remove('error');
            }    
};

