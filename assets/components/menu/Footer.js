import React from "react";
import {Link, useNavigate} from "react-router-dom";
import "./../../styles/footer.css";

export default function  Footer (props) {
    return (
        <div>
            <div className="container-fluid justify-content-center" style={{display: "flex"}}>
                <div className="row py-5">
                    <div className="col">
                        <div className="card border-0" style={{marginLeft: "-255px", width: "469px", padding: "10px"}}>
                            <div className="card-body text-center ">
                                <h2><b>Let `s have a chat !</b></h2>
                                <p className="pl-0 ml-0 mb-5">We help creators and entrepreneurs to finance and make their projects their projects.</p>
                                <div className="row text-center justify-content-center">
                                    <div className="col-auto">
                                        <div className="input-group-lg input-group mb-3 ">
                                            <input type="text" style={{marginTop: "35px", width: "100px"}}
                                                                                                 className="form-control"
                                                                                                 placeholder="Enter your e-mail address"
                                                                                                 aria-label="Recipient's username"
                                                                                                 aria-describedby="button-addon2" />
                                            <div className="input-group-append">
                                                <button className="btn "  type="button" style={{ width: "300px",backgroundColor: "#8EC837"}} id="button-addon2">
                                                    <b>Submit</b></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div className="mx-0 px-0">
                    <footer>
                        <div className="row justify-content-around mb-0 pt-5 pb-0 ">
                            <div className=" col-11">
                                <div className="row justify-content-center" style={{display: "flex",
                                    width: "1000px",
                                    marginTop: "50px",
                                    marginLeft: "20px",
                                }}>
                                    <div className="col-md-3 col-12 font-italic align-items-center mt-md-3 mt-4">
                                        <h5>
                                            <span>

                                            </span>
                                            <b className="text-dark"> Giving
                                                <span className="text-muted"> Give</span>
                                            </b>
                                        </h5>
                                        <p className="social mt-md-3 mt-2">
                                            <span>
                                                <i className="fa fa-facebook " aria-hidden="true"></i>
                                            </span>
                                            <span>
                                                <i className="fa fa-linkedin" aria-hidden="true"></i>
                                            </span>
                                            <span>
                                                <i className="fa fa-twitter" aria-hidden="true"></i>
                                            </span>
                                        </p>
                                        <small className="copy-rights cursor-pointer">&#9400; 2019 EasyGo Digital
                                        Technologies
                                        </small>
                                        <br />
                                            <small>Copyright.All Rights Resered. </small>
                                    </div>
                                    <div className="col-md-3 col-12 my-sm-0 mt-5">
                                        <ul className="list-unstyled">
                                            <li className="mt-md-3 mt-4">Fund a project</li>
                                            <li>How to run a successful campaign</li>
                                            <li>Our features</li>
                                            <li>Crowdfunding
                                                Donation in exchange for rewards
                                                Presale</li>
                                            <li>FAQ</li>
                                        </ul>
                                    </div>
                                    <div className="col-md-3 col-12 my-sm-0 mt-5">
                                        <ul className="list-unstyled">
                                            <li className="mt-md-3 mt-4">Partnerships</li>
                                            <li>Become partners</li>
                                            <li>Partners deals</li>
                                            <li>Local authorities</li>
                                        </ul>
                                    </div>
                                    <div className="col-xl-auto col-md-3 col-12 my-sm-0 mt-5">
                                        <ul className="list-unstyled">
                                            <li className="mt-md-3 mt-4">About</li>
                                            <li>Our values</li>
                                            <li>Our presence on the territory</li>
                                            <li>Our record projects</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
)
}