import React, {useEffect, useRef, useState} from "react";
import '../../styles/layout/styles/inputFileStyle.css';
import '../../styles/layout/scripts/form';
import img from './startP.png';
import {useNavigate} from "react-router-dom";

export default function  AddProject(props) {

    const title = useRef(null);
    const description = useRef(null);
    const fundObjective = useRef(null);
    const slogan = useRef(null);
    const image = useRef(null);
    const video = useRef(null);
    const category = useRef(null);
    const [categoryP, setCategoryP] = useState("");
    const user = JSON.parse(localStorage.getItem('currentUser'));
    const navigate = useNavigate();


    const handleClickAfterLogin = () => {
        navigate(`/${user.firstName}/projects/`)
    }

    const handleFormSubmit = (event) => {
        event.preventDefault();

        const { onNewProjectSubmit } = props;

        onNewProjectSubmit(title.current.value, description.current.value, fundObjective.current.value, image.current.value, video.current.value,category.current.value);
        handleClickAfterLogin();
    }


    return (
        <div className="container-fluid px-1 py-5 mx-auto mt-4">
            <div className="row d-flex justify-content-center" style={{marginRight: '500px'}} >
                <div className="col-xl-7 col-lg-8 col-md-9 col-12 mt-4">
                    <div style={{width: '600px',marginLeft: '165px'}}>
                        <div>
                            <img src={img} style={{width: '200px',height: '200px',marginLeft: '198px'}}/>
                        </div>
                        <h2 style={{marginLeft: '44px'}}>Let’s get ready to start your campaign!</h2>
                        <p style={{textAlign: 'center'}}>
                            We want to create the best onboarding for you –<b /> please fill out the information below.<b /> Your answers will be locked for this campaign and can’t be changed later.
                        </p>
                    </div>

                    <div className="card" style={{fontFamily: 'system-ui'}}>
                        <div style={{marginLeft: '85px',marginTop: '70px'}}>
                            <div className="form-control-label mb-2">
                                Who are you raising money for?
                                <h6 className="text-secondary">
                                    Please choose the type of account that will be receiving your funds.
                                </h6>
                                <fieldset>
                                    <div className="some-class">
                                        <input type="radio" className="radio" name="individual" value="individual" id="individual"/>
                                        <label htmlFor="individual">individual</label>
                                        <input type="radio" className="radio" name="Business" value="Business" id="Business"/>
                                        <label htmlFor="Business">Business</label>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                        <form className="form-card" onSubmit={ handleFormSubmit } style={{marginLeft: '100px'}}>
                            <div className="row justify-content-between text-left mt-5">
                                <div className="form-group ">
                                    <label className="form-control-label mb-2">
                                        What is the name of your company or project?This question is required <span className="text-danger"> *</span>
                                    </label>
                                    <input type="text" id="title" ref={ title } required />
                                </div>
                            </div>
                            <div className="row justify-content-between text-left mt-5">
                                <div className="form-group ">
                                    <label className="form-control-label mb-2">
                                        In which sector does your company operate?
                                    </label>
                                    <select className="form-select" aria-label="Default select example"
                                            ref={ category }
                                    >
                                        <option>Open this select menu</option>
                                        <option value="1">Mode & Design</option>
                                        <option value="2">Musique</option>
                                        <option value="3">Jeux</option>
                                    </select>
                                </div>
                            </div>
                            <div className="row justify-content-between text-left mt-5">
                                <div className="form-group ">
                                    <label className="form-control-label mb-2">
                                        Can you tell us more about giving give?This question is required <span className="text-danger"> *</span><br/>
                                        <b className="min-text">
                                            2 or 3 lines to understand your business, your sector and the purpose of this financing.
                                        </b>
                                    </label>
                                    <textarea id="description" ref={ description } required></textarea>
                                </div>
                            </div>
                            <div className="row justify-content-between text-left mt-5">
                                <div className="form-group ">
                                    <label className="form-control-label mb-2">
                                        What is your fundraising goal?This question is required * ? <br/>
                                    </label>
                                    <input type="number" id="obejFund" ref={ fundObjective } required />
                                </div>
                            </div>
                            <div className="row justify-content-between text-left mt-5">
                                <div className="form-group ">
                                    <label className="form-control-label mb-2">
                                        Choose a cover image for your project*  <br/>
                                    </label>
                                    <input type="file" id="photo" ref={ image } required />
                                </div>
                            </div>
                            <div className="row justify-content-between text-left mt-5">
                                <div className="form-group ">
                                    <label className="form-control-label mb-2">
                                        You can add a video to present your project (recommended)  <br/>
                                    </label>
                                    <input type="file" id="video" ref={ video } required />
                                </div>
                            </div>
                            <div className="fac alert mt-3 mb-3" style={{width: '600px'}}>
                                <h3 className="font"><b>FAQ</b></h3>
                                <a href="#" className="text-primary hr">
                                     + Add a Question
                                </a>
                            </div>
                            <div className="row justify-content-end" style={{marginRight: '85px'}}>
                                <div className="form-group col-sm-6">
                                    <button type="submit" className="btn-block btn-primary mt-3">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    )

}

AddProject.propTypes = {

}