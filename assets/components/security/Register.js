import React, {useRef, useState} from "react";
import img from './../../images/background.jpg';
import './../../styles/register.css';
import {Link, useNavigate, useSearchParams} from "react-router-dom";
import Select from 'react-select';

export  function Register(props) {
    const user = JSON.parse(localStorage.getItem('currentUser'));
    const [searchParams, setSearchParams] = useSearchParams();
    const role = searchParams.get("role");
    const navigate = useNavigate();

    const firstName = useRef(null);
    const lastName = useRef(null);
    const email = useRef(null);
    const password = useRef(null);
    const phone = useRef(null);
    const birthday = useRef(null);
    const photo = useRef(null);
    const bio = useRef(null);

    const options = [
        { value: 'What is your Birthdate?', label: 'What is your Birthdate?' },
        { value: 'What is Your old Phone Number', label: 'What is Your old Phone Number' },
        { value: 'What is your Pet Name?', label: 'What is your Pet Name' }
    ]

    const redirectUser = () => {
        navigate(`/${firstName.current.value}/profile/`)
    }

    const validate = (email, password, firstName, lastName, birthday, phone) => {
        if (firstName === "") {
            document.getElementById("errorFirstName").style.opacity = "1";
        }
        if (password === "") {
            document.getElementById("errorPassword").style.opacity = "1";
        }
        if (lastName === "") {
            document.getElementById("errorLastName").style.opacity = "1";
        }
        if (email === "") {
            document.getElementById("errorEmail").style.opacity = "1";
        }
        if (phone === "") {
            document.getElementById("errorPhone").style.opacity = "1";
        }
        if (birthday === "") {
            document.getElementById("errorBirthday").style.opacity = "1";
        }


    }
    const handleFormSubmit = (event) => {
        event.preventDefault();

        const { onNewUser } = props;

        validate(email.current.value, password.current.value, firstName.current.value, lastName.current.value, birthday.current.value, phone.current.value);

        onNewUser(firstName.current.value, lastName.current.value, email.current.value, password.current.value, birthday.current.value, role, photo.current.value , bio.current.value);
    }




    return (
        <div className="container register">
            <div className="row">
                <div className="col-md-3 register-left">
                    <h3>Welcome</h3>
                    <p>You are 30 seconds away from earning your own money!</p>
                        <Link to="/login" className="btn-reg">Login</Link>
                </div>
                <div className="col-md-9 register-right">
                    <ul className="nav nav-tabs nav-justified" id="myTab" role="tablist">
                        <li className="nav-item">
                            <a className="nav-link " id="home-tab" data-toggle="tab" href="#/register?role=c" role="tab" style={{backgroundColor: 'white', color: '#007bff'}}
                               aria-controls="home" aria-selected="false">Contributor</a>
                        </li>
                        <li className="nav-item">
                            <a className="nav-link" id="profile-tab" data-toggle="tab" href="#/register?role=p" role="tab"
                               aria-controls="profile" aria-selected="false">P.P</a>
                        </li>
                    </ul>
                    <form className="tab-content" id="myTabContent" onSubmit={handleFormSubmit}>

                        <div className="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            {role === "c" ? <h3 className="register-heading">Apply as a Contributor</h3> : <h3 className="register-heading">Apply as a Project Holder</h3>}
                            <div className="row register-form">
                                {!!(props.message)?
                                    <span className="alert alert-success" style={{width: "1000px",marginBottom: "50px", paddingLeft: "100px"}}>
                                            {props.message}
                                        </span>
                                    :""}
                                <div className="col-md-6">
                                    <div className="form-group">
                                        <input type="text" className="form-control" placeholder="First Name *" ref={firstName} />
                                        <span style={{fontSize: "9px", color: "red",opacity: "0"}} id="errorFirstName">firstName should not be blank</span>
                                    </div>
                                    <div className="form-group">
                                        <input type="text" className="form-control" placeholder="Last Name *"  ref={lastName} />
                                        <span style={{fontSize: "9px", color: "red",opacity: "0"}} id="errorLastName">lastName should not be blank</span>
                                    </div>
                                    <div className="form-group">
                                        <input type="password" className="form-control" placeholder="Password *" ref={password} />
                                        <span style={{fontSize: "9px", color: "red",opacity: "0"}} id="errorPassword">password should not be blank</span>
                                    </div>
                                    <div className="form-group">
                                        <input type="password" className="form-control" placeholder="Confirm Password *" />
                                        <span style={{fontSize: "9px", color: "red",opacity: "0"}} id="errorConfirmPassword">this value should be the same as password</span>
                                    </div>
                                    {role === "p" ?
                                        <div className="form-group">
                                            <input type="file" className="form-control" ref={photo}
                                            />
                                        </div>
                                        :
                                        ''}
                                    <div className="form-group">
                                        <div className="maxl flex-row">
                                            <span className="radio inline">
                                                <input type="date" name="birthday" style={{width: "162px"}} placeholder="Your birthday" ref={birthday}  />
                                                    <span style={{fontSize: "9px", color: "red",opacity: "0"}} id="errorBirthday">birthday should not be blank</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div className="col-md-6">
                                    <div className="form-group">
                                        <input type="email" className="form-control" placeholder="Your Email *" ref={email} />
                                        <span style={{fontSize: "9px", color: "red",opacity: "0"}} id="errorEmail">email should not be blank</span>
                                    </div>
                                    <div className="form-group">
                                        <input type="text" minLength="10" maxLength="10" name="txtEmpPhone"
                                               className="form-control" placeholder="Your Phone *"  ref={phone}/>
                                        <span style={{fontSize: "9px", color: "red",opacity: "0"}} id="errorPhone">phone should not be blank</span>

                                    </div>
                                    <div className="form-group">
                                        <Select options={options} className="form-control" />
                                    </div>
                                    <div className="form-group mt-5">
                                        <input type="text" className="form-control" placeholder="Enter Your Answer "
                                               />
                                    </div>
                                    {role === "p" ?
                                        <div className="form-group">
                                            <textarea  className="form-control" placeholder="Enter your bio" ref={bio}
                                            ></textarea>
                                        </div>
                                        :
                                        ''}
                                    <input type="submit" className="btnRegister" value="Register"/>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    )
}