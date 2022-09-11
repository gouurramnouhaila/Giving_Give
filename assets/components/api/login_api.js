import {useNavigate} from "react-router-dom";

export  function loginApi(user) {
    const token = "";
    return  fetch('/api/login_check', {
        method: 'POST',
        body: JSON.stringify(user),
        mode: "cors",
        headers: {
            'Content-Type': 'application/json'
        }
    })
}

export function isLoggedIn() {
    return !!localStorage.getItem('token');

}

export function getJwtToken() {
    return localStorage.getItem('token');
}

export function getCurrentUser() {
    return JSON.parse(localStorage.getItem('current_user'));
}

export function getRole() {

}

export function logout() {
    // remove user from local storage to log user out
    localStorage.removeItem('current_user');
    localStorage.removeItem('token');
}

export const redirectLogin  = (status) => {
    const navigate = useNavigate();

    if(status == 200) {
        console.log('Successfully Login');
        navigate('/');
    }else {
        navigate('/login');
    }
}

