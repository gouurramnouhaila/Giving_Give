import React, {useState} from "react";
import "../../styles/layout/styles/cardList.css";
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faHourglass, faPeopleGroup } from '@fortawesome/free-solid-svg-icons'
import {Link, useParams} from "react-router-dom";
import axios from "axios";
import {getProjects} from "../api/projects_api";
import img1 from "./images/img1.jpg";
import img2 from "./images/img2.jpg";
import img3 from "./images/img3.jpg";

export default function Projects(props)  {

        const { onDeleteProject,getOneProjects } = props;
        const handleDeleteClick = function (event, id) {
            event.preventDefault();

            onDeleteProject(id);
        }

        const [project, setProject] = useState([]);


        return (
            <div>
                <div className="container mt-5 mb-5">
                    {props.projects.map( project =>
                    <div className="d-flex justify-content-center row mb-5" key={project.id}>
                        <div className="col-md-10">
                            <div className="row p-2 bg-white border rounded">
                                <div className="col-md-3 mt-1"><img style={{width: "200px", height: "220px"}}
                                    className="img-fluid img-responsive rounded product-image mt-2"
                                                                    src={ require(`./images/${project.photo}`) }  /></div>
                                <div className="col-md-6 mt-1">
                                    <h5>{project.title}</h5>
                                    <p className="min-text">By Sable paris</p>
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
                                                          <span>54 </span>
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
                                        {project.description}
                                        <br />
                                    </p>
                                </div>
                                <div className="align-items-center align-content-center col-md-3 border-left mt-1">
                                    <div className="d-flex flex-row align-items-center">
                                      <ul className="ul mt-4" style={{height: "62px"}}>
                                          <li>
                                              <p style={{ fontSize: "20px" }}>
                                                  {project.objectiveFund}$ <br/>
                                                  <span className="m-lg-3 text-danger" style={{ fontSize: "14px"}} >Out of  2,500  $$</span>
                                              </p>
                                          </li>
                                      </ul>
                                    </div>
                                    <div className="d-flex flex-column mt-4">
                                        <Link to={`/fund/${project.id}/`} className="btn btn-primary btn-sm" style={{width: '200px'}}>Fund</Link>
                                        <Link to={`/projects/${project.id}/`} className="btn btn-outline-primary btn-sm mt-2" style={{width:'200px'}}>Show Details</Link>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    )}
                </div>
            </div>
        )
}