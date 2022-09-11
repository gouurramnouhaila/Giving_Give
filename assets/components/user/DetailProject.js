import React, {useEffect, useState} from "react";
import "./../../styles/layout/styles/cardList.css";
import "./../../styles/layout/likedBtn.css";
import "./../../styles/layout/likedBtn";
import {Link, useNavigate, useParams} from "react-router-dom";
import { confirmAlert } from 'react-confirm-alert'
import axios from "axios";
import {FontAwesomeIcon} from "@fortawesome/react-fontawesome";
import {faHourglass, faPeopleGroup} from "@fortawesome/free-solid-svg-icons";
import {deleteProject, editProject} from "../api/projects_api";
import img1 from "./images/image1.jpg";

export default function DetailProject(props) {

    const [project, setProject] = useState([]);
    const user = JSON.parse(localStorage.getItem('currentUser'));
    const params = useParams();
    const navigate = useNavigate();


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

    useEffect( () => {
        console.log(project)
    }, [project]);

    const removeProject = (id, e) => {
        deleteProject(id).then(async response => {
            e.preventDefault();
            const data = await response.json();

            if (!response.ok) {
                const error = (data && data.message) || response.status;
                return Promise.reject(error);
            }
            //setMyProjects(myProjects.filter(project => { return project.id !== id }));
            navigate(`/${user.firstName}/projects`)
        })
            .catch(error => {
                console.error('There was an error!', error);
            });
    }

    const updateProject = (project, e) => {
        editProject(project) .then(async response => {
            const data = await response.json();

            // check for error response
            if (!response.ok) {
                // get error message from body or default to response status
                const error = (data && data.message) || response.status;
                return Promise.reject(error);
            }

            //setMyProjects(data.id);
        })
            .catch(error => {
                //setErrorMessage(error);
                console.error('There was an error!', error);
            });
    }


    return (
        <div>
            <div style={{display: "flex"}}>
                <Link to={`/${user.firstName}/profile`} className="btn btn-primary" style={{width: "150px",height: "40px", marginRight: "10px",marginTop: "-17px"}}> previous </Link>
                <div className="presentation">
                    <div className="styled__StyledContainer-sc-tuad86-0 bQHUrC owner-panel__StyledContainer-sc-3juabw-0 hUqsSk">
                        <div className="kiss-OwnerPanel-title">
                            <h1 className="title__StyledTitle-sc-46lshq-0 fCnfHz k-Title k-Title--quaternary" style={{marginLeft: "-190px"}}>Manage My Project</h1>
                        </div>
                        <div className="kiss-OwnerPanel-projectInfo" style={{marginLeft: "70px"}}>
                            <div className="flex-wrapper__StyledWrapper-sc-z0vdh1-0 cxfqvf k-FlexWrapper">
                            <span className="k-u-color-font1 k-u-size-medium k-u-weight-700">
                                Project status :
                            </span>

                                <span className="k-u-color-font1 k-u-size-medium k-u-weight-400">
                                {(() => {
                                    if (project.status === "accepted") {
                                        return (
                                            <span> accepted{ `  ` } <i>({new Date().toLocaleString() + ""})</i></span>
                                        )
                                    } else if (project.status === "rejected") {
                                        return (
                                            <span>rejected{ `  ` } <i>({new Date().toLocaleString() + ""})</i></span>
                                        )
                                    } else {
                                        return (
                                            <span> pending{ `  ` } <i>({new Date().toLocaleString() + ""})</i></span>
                                        )
                                    }
                                })()}
                            </span>
                            </div>
                        </div>
                        <div className="kiss-OwnerPanel-buttonsWrapper">
                            <div className="buttons__ButtonsWrapper-sc-1agihux-0 biQPWr k-u-flex-justifyContent-end@l-up">
                                <div className="k-Modal kiss-Button-fullWidth">
                                    <button className="button__StyledButton-sc-dl59vq-0 isGFnp k-Button k-Button--small k-Button--copper k-Button--fit-content k-Button--mobile-fit-fluid btn btn-danger" type={"button"} style={{width:"150px"}} onClick={(e) => {if(window.confirm('Delete the item?')){removeProject(project.id, e)};}}>Delete</button>
                                </div>
                                <div className="k-Modal kiss-Button-fullWidth">
                                    <Link className="button__StyledButton-sc-dl59vq-0 isGFnp k-Button k-Button--small k-Button--copper k-Button--fit-content k-Button--mobile-fit-fluid btn btn-warning" type={"button"} style={{width:"100px",border: "none",height: "38px"}} onClick={(event) => updateProject(project, event)} to={`/projects/edit/${project.id}`}>Edit</Link>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div className="container mt-5 mb-5 center-content" style={{marginRight: "10px"}}>
                <img className="circular_image mb-5" src={img1} />
                <h1 className="mb-4">{project.title}</h1>
                <div style={{display: "flex"}}>
                    <div className="btn_wrap mb-4">
                        <span className="span">Share</span>
                        <div className="container">
                            <i className="fab fa-facebook-f i"></i>
                            <i className="fab fa-twitter i"></i>
                            <i className="fab fa-instagram i"></i>
                            <i className="fab fa-github i"></i>
                        </div>
                    </div>
                </div>

                <div className="d-flex justify-content-center row mb-5">
                    <div className="col-md-10">
                        <div className="row p-2 bg-white border rounded">

                            <div className="col-md-6 mt-1" style={{width: "1000px"}}>
                                <h5></h5>
                                <p className="min-text">By {user.firstName}  {user.lastName}</p>
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
                                <div className="d-flex flex-column mt-4">
                                    <div className="like-content">
                                      <span>
                                        Do you want to add this project to your favourite?
                                      </span>
                                        <button className="btn-secondary like-review mt-3 mb-3 pb-4">
                                            <i className="fa fa-heart" aria-hidden="true"></i> Favourite
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    )
}