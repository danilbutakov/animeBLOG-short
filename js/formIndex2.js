"use strict";

let form2 = document.querySelector('.js-form2'),
    formInputs2 = document.querySelectorAll('.js-input2'),
    inputEmail2 = document.querySelector('.js-input-email2');

    function validateEmail(email) {
        let re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(String(email).toLowerCase());
    }   

    function validatePassword(password) {
        let re2 = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[^\w\s]).{6,}/;
        return re2.test(String(password));
    }

    form2.onsubmit = function () {
        let emailVal = inputEmail2.value,
            emptyInputs = Array.from(formInputs2).filter(input => input.value === '');

            formInputs2.forEach(function (input) {
                if (input.value === '') {
                    input.classList.add('error');
                } else {
                    input.classList.remove('error');
                    return false;
                }
            });

            

            if(!validateEmail(emailVal)) {
                console.log('email not valid');
                inputEmail2.classList.add('error');
                return false;
            } else {
                inputEmail2.classList.remove('error');
            }    
};

