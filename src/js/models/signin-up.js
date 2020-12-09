import { elements } from '../views/base';

function signUpMode(el) {
    if (el) {
        el.addEventListener('click', () => {
            elements.container.classList.toggle('sign-up-mode');
        });
    }
}

signUpMode(elements.sign_in_btn);
signUpMode(elements.sign_up_btn);
