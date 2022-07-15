import React from "react";
import './../../styles/layout/styles/form.css';

export default class Login extends React.Component {
    render() {
        return (
            <div>
                <div className="signup">
                    <div className="signup-connect">
                        <h1>Create your account</h1>
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
                        <form className="form">
                            <fieldset className="username">
                                <input type="text" placeholder="username"/>
                            </fieldset>
                            <fieldset className="email">
                                <input type="email" placeholder="email"/>
                            </fieldset>
                            <fieldset className="password">
                                <input type="password" placeholder="password"/>
                            </fieldset>
                            <button type="submit" className="btn m-15">sign up</button>
                        </form>
                    </div>
                </div>
            </div>
        )
    }
}