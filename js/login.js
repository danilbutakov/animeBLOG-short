let form4 = document.querySelector('.js-form'),
    formInputs4 = document.querySelectorAll('.js-input'),
    inputEmail4 = document.querySelector('.js-input-email'),
    inputPassword4 = document.querySelector('.js-input-password');

    function validateEmail(email) {
        let re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(String(email).toLowerCase());
    }   

    function validatePassword(password) {
        let re2 = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[^\w\s]).{6,}/;
        return re2.test(String(password));
    }

    form4.onsubmit = function () {
        let emailVal = inputEmail4.value,
            passwordVal = inputPassword4.value,
            emptyInputs = Array.from(formInputs4).filter(input => input.value === '');

            formInputs4.forEach(function (input) {
                if (input.value === '') {
                    input.classList.add('error');
                } else {
                    input.classList.remove('error');
                    return false;
                }
            });

            

            if(!validateEmail(emailVal)) {
                console.log('email not valid');
                inputEmail4.classList.add('error');
                return false;
            } else {
                inputEmail4.classList.remove('error');
            }    
            
            if(!validatePassword(passwordVal)) {
                console.log('password not valid');
                inputPassword4.classList.add('error');
                return false;
            } else {
                inputPassword4.classList.remove('error');
            }
};
