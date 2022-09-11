import React, {useEffect, useState} from "react";
import "../../styles/layout/styles/cardList.css";
import {Link, useParams} from "react-router-dom";
import axios from "axios";
import {FontAwesomeIcon} from "@fortawesome/react-fontawesome";
import {faHourglass, faPeopleGroup} from "@fortawesome/free-solid-svg-icons";

export default function Project(props) {

    const [project, setProject] = useState([]);
    const params = useParams();

    const getOneProjects = () => {
        axios.get(`http://localhost:8000/api/projects/${params.id}`).then(res => {
            setProject(prevState => {
                return {...prevState, ...res.data};
            });
        })
    }

    useEffect( () => {
        getOneProjects()
    }, []);

    return (
        <div>
            <div className="container mt-5 mb-5">
                <div className="d-flex justify-content-center row mb-5" key={project.id}>
                    <div className="col-md-10">
                        <div className="row p-2 bg-white border rounded">
                            <div className="col-md-3 mt-1"><img
                                className="img-fluid img-responsive rounded product-image mt-4"
                                src="https://picsum.photos/300/300" /></div>
                            <div className="col-md-6 mt-1">
                                <h5>{project.title}</h5>
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
                                    “{project.description} Lorem ipsum dolor sit amet, consectetur,<br /> sed do eiusmod tempor incididunt ut<br/> labore et dolore magna aliqua.”
                                    <br />
                                </p>
                            </div>
                            <div className="align-items-center align-content-center col-md-3 border-left mt-1">
                                <div className="d-flex flex-row align-items-center">
                                    <ul className="ul mt-4">
                                        <li>
                                            <p style={{ fontSize: "20px" }}>
                                                { project.objectiveFund } $
                                                <span className="m-lg-3 text-danger" style={{ fontSize: "14px" }} >Out of 3000 $$</span>
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                                <h6 className="text-success mt-3">
                                    <a href="#" onClick={(event) => handleDeleteClick(event, project.id)}>
                                        <i className="fas fa-trash"></i>
                                    </a>
                                </h6>
                                <div className="d-flex flex-column mt-4">
                                    <Link to={`/fund/${project.id}`} className="btn btn-primary btn-sm" style={{width: '200px'}}>Fund</Link>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    )
}