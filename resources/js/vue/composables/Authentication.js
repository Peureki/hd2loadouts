// *-------------------------------------*
// *-------------------------------------*
// * REGISTRATION
// *-------------------------------------* 

import axios from "axios";
import { user } from '@/js/vue/composables/Global'

// *-------------------------------------*
export const register = async (name, email, password, remember) => {
    try {
        const response = await fetch('/register', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            },
            body: JSON.stringify({
                name: name,
                email: email,
                password: password,
            }),
        });

        if (response.ok){
            console.log('User successfully registered!');
            login(name, email, password, remember);
        }
    } catch (error){
        console.log('Could not register user: ', error); 
    }
}

// *-------------------------------------*
// *-------------------------------------*
// * LOGIN
// *-------------------------------------* 
// *-------------------------------------*
export const login = async (name, email, password, remember) => {
    // Get unique CSRF cookie first
    axios.get('/sanctum/csrf-cookie')
        .then(() => {
            // Send POST request to login
            return axios.post('/login', {
                name: name,
                email: email,
                password: password,
                remember: remember,
            }, {
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                }
            });
        })
        .then(response => {
            // If login is successful, refresh the page
            if (response) {
                console.log("Login successful!", response);
                getAuthUser(); 
                //window.location.reload();
            }
        })
        .catch(error => {
            // Handle login error
            console.log('Login error: ', error);
            //handleAuthErrors(error);
        });
};

// *-------------------------------------*
// *-------------------------------------*
// * GET AUTH USER
// *-------------------------------------* 
// *-------------------------------------*
export const getAuthUser = async () => {
    try {
        let { data } = await axios.get('/api/user');
        user.value = data; 

        console.log('user: ', user.value);

    } catch (error){
        console.log('Unable to retrieve user: ', error); 
    }
}

// * LOGOUT USER
// * user.value => null 
// * refresh the page
export const logout = async () => {
    try {
        const response = await axios.post(`/logout`);

        if (response){
            user.value = null;
            console.log('Logout successful!');
            window.location.reload();
        }
    } catch (error){
        console.log('Logout failed: ', error);
    }
}