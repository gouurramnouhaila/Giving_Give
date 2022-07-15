import React from "react";
import "../../styles/layout/styles/cardList.css";
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faHourglass, faPeopleGroup } from '@fortawesome/free-solid-svg-icons'


export default class MyProjects extends React.Component {

    constructor() {
        super();
    }

    render() {
        return (
            <div>
                <div className="container mt-5 mb-5">
                    <div className="d-flex justify-content-center row mb-5">
                        <div className="col-md-10">
                            <div style={{display: "flex"}}>
                                <div className="col-3" style={{marginRight: "500px"}}>
                                    <h5 >My Projects</h5>
                                </div>
                                <div className="col-3 mb-2">
                                    <button className="btn btn-primary btn-sm" type="button">Add Project</button>
                                </div>
                            </div>
                            <div className="row p-2 bg-white border rounded">
                                <div className="col-md-3 mt-1"><img
                                    className="img-fluid img-responsive rounded product-image mt-2"
                                    src="https://picsum.photos/300/300" /></div>
                                <div className="col-md-6 mt-1">
                                    <h5>Sport Accessory</h5>
                                    <p className="min-text">By Nouhaila</p>
                                    <div className="d-flex flex-row">
                                        <div className="ratings mr-2"><i className="fa fa-star"></i><i
                                            className="fa fa-star"></i><i className="fa fa-star"></i><i
                                            className="fa fa-star"></i></div>
                                    </div>
                                    <div className="mt-1 mb-1">
                                        <ul className="ul">
                                            <li>
                                                <b> <FontAwesomeIcon icon={faPeopleGroup} />    Contribution</b>
                                            </li>
                                            <li>
                                                <div className="mt-1 mb-1 spec-1">
                                                    <p>
                                                        <span>0 </span>
                                                    </p>
                                                </div>
                                            </li>
                                        </ul>
                                        <ul className="ul">
                                            <li>
                                                <b> <FontAwesomeIcon icon={faHourglass} /> Remaining  </b>
                                            </li>
                                            <li>
                                                <div className="mt-1 mb-1 spec-1">
                                                    <p>
                                                            <span>12 Days</span>
                                                    </p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <p className="mb-0 max-text">
                                        “ Lorem ipsum dolor sit amet, consectetur,<br /> sed do eiusmod tempor incididunt ut<br/> labore et dolore magna aliqua.”
                                        <br />
                                    </p>
                                </div>
                                <div className="align-items-center align-content-center col-md-3 border-left mt-1">
                                    <div className="d-flex flex-row align-items-center">
                                        <ul className="ul mt-4">
                                            <li>
                                                <p style={{ fontSize: "20px" }}>
                                                    10000 $
                                                    <span className="m-lg-3 text-danger" style={{ fontSize: "14px" }} >Out of 3000 $$</span>
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        )
    }
}