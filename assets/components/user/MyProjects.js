import React from "react";
import "../../styles/layout/styles/cardList.css";
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faHourglass, faPeopleGroup } from '@fortawesome/free-solid-svg-icons'
import UserMenu from "./UserMenu";
import {Link, useNavigate} from "react-router-dom";
import {useEffect, useState} from "react";
import axios from "axios";
import {deleteProject, editProject} from "../api/projects_api";


export default function  MyProjects() {

    const user = JSON.parse(localStorage.getItem('currentUser'));
    const [ myProjects, setMyProjects ] = useState([]);

    useEffect( () => {
        getProjectsByProjectHolder()
    }, []);

    useEffect( () => {
        console.log(myProjects)
    }, [myProjects]);

    const getProjectsByProjectHolder = async () => {
        if (user) {
            axios.get(`http://localhost:8000/api/project/user/`+user.id).then(res => {
                console.log(...res.data)
                setMyProjects(res.data);
            })
        }

    }


    return (
        <div>
            <div style={{marginTop: '50px'}}>
                <UserMenu />
            </div>
                <div className="container mt-5 mb-5">
                    <h2 style={{marginLeft: "365px", marginBottom: "66px"}}>My Projects</h2>
                    <div className="d-flex justify-content-center row mb-5"
                         style={{width: "800px", marginLeft: "300px"}}>
                        <div style={{display: "flex", marginLeft: "550px"}}>
                            <Link className="btn" style={{
                                width: "100px",
                                border: "none",
                                marginBottom: "25px",
                                backgroundColor: "#007bff",
                                height: "39px"
                            }} to={`/projects/add`}>Add</Link>
                        </div>
                    </div>
                    {myProjects.map(myProject =>
                        <div className="d-flex justify-content-center row mb-5"
                             style={{width: "800px", marginLeft: "300px"}} key={myProject.id}>
                            <div className="col-md-10">
                                <div className="row p-2 bg-white border rounded">
                                    <div className="col-md-3 mt-1">
                                        <Link to={`/${user.firstName}/projects/${myProject.id}`}>
                                            <img style={{height: "180px"}}
                                                className=" img-responsive rounded product-image mt-4"
                                                src={ require(`./images/${myProject.photo}`) }/>
                                        </Link>
                                    </div>
                                    <div className="col-md-6 mt-1">
                                        <h5>{myProject.title}</h5>

                                        <div className="mt-1 mb-1">
                                            <ul className="ull">
                                                <li className="li">
                                                    <b> <i className="fas fa-exclamation"></i> Status</b>
                                                </li>
                                                <li>
                                                    <div className="mt-1 mb-1 spec-1">
                                                        <p>
                                                    <span>
                                                        {(() => {
                                                            if (myProject.status === "accepted") {
                                                                return (
                                                                    <i className="fas fa-check"></i>
                                                                )
                                                            } else if (myProject.status === "rejected") {
                                                                return (
                                                                    <i className="fas fa-ban"></i>
                                                                )
                                                            } else {
                                                                return (
                                                                    <i className="fas fa-spinner"></i>
                                                                )
                                                            }
                                                        })()}
                                                    </span>
                                                        </p>
                                                    </div>
                                                </li>
                                            </ul>
                                            <ul className="ull">
                                                <li className="li">
                                                    <b> <FontAwesomeIcon icon={faPeopleGroup}/> Contribution</b>
                                                </li>
                                                <li>
                                                    <div className="mt-1 mb-1 spec-1">
                                                        <p>
                                                            <span>__</span>
                                                        </p>
                                                    </div>
                                                </li>
                                            </ul>
                                            <ul className="ul">
                                                <li className="li">
                                                    <b> <FontAwesomeIcon icon={faHourglass}/> Remaining </b>
                                                </li>
                                                <li>
                                                    <div className="mt-1 mb-1 spec-1">
                                                        <p>
                                                            <span>__</span>
                                                        </p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <p className="mb-0 max-text">
                                            {myProject.description}
                                            <br/>
                                        </p>
                                    </div>
                                    <div className="align-items-center align-content-center col-md-3 border-left mt-1">
                                        <div className="d-flex flex-row align-items-center">
                                            <ul className="ull mt-4" style={{height: "62px"}}>
                                                <li>
                                                    <p style={{fontSize: "20px"}}>
                                                        10000 $
                                                        <span className="m-lg-3 text-danger" style={{fontSize: "14px"}}>Out of {myProject.objectiveFund} $$</span>
                                                    </p>
                                                </li>
                                            </ul>
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