import React, {useRef, useState} from "react";
import './../../styles/layout/styles/form.css';
import {useNavigate} from "react-router-dom";



export default function Login(props) {

    const navigate = useNavigate();
    const email = useRef(null);
    const password = useRef(null);
    const user = JSON.parse(localStorage.getItem('currentUser'));



    const handleSubmit = e => {
        e.preventDefault();
        const  { onLogin, auth } = props;

        const data = {
            username: email.current.value,
            password : password.current.value
        }

        onLogin(data)

        navigate(`/${user.firstName}/profile/`);
    }




    return (
            <div>
                <div className="signup">
                    <div className="signup-connect">
                        <h1>Login with</h1>
                        <a href="#" className="btn btn-social btn-facebook"><i className="fa fa-facebook mb-3"></i> Sign in
                            with Facebook</a>
                        <a href="#" className="btn btn-social btn-twitter"><i className="fa fa-twitter"></i> Sign in
                            with Twitter</a>
                        <a href="#" className="btn btn-social btn-google"><i className="fa fa-google"></i> Sign in with
                            Google</a>
                        <a href="#" className="btn btn-social btn-linkedin"><i className="fa fa-linkedin"></i> Sign in
                            with Linkedin</a>
                    </div>
                    <div className="signup-classic">
                        <h2>Or use the classical way</h2>
                        {!!(props.credentialsError)?
                            <span className="alert alert-danger">
                                {props.credentialsError}
                            </span>
                            :""}
                        <form className="form"  onSubmit={handleSubmit}>
                            <fieldset className="email">
                                <input type="email"  ref={email} placeholder="email"/>
                            </fieldset>
                            <fieldset className="password">
                                <input type="password"  ref={password} placeholder="password" />
                            </fieldset>
                            <button type="submit" className="btn m-15" >Login</button>
                        </form>
                    </div>
                </div>
            </div>
    )

}
