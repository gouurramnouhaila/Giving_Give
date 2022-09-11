import React, {useEffect, useState} from "react";
import '../../styles/layout/styles/inputFileStyle.css';
import '../../styles/layout/scripts/form';
import {getProject} from "../api/projects_api";
import {useParams, useSearchParams} from "react-router-dom";
import axios from "axios";
import UserMenu from "../user/UserMenu";

export default function UpdateProject () {


    const params = useParams();
    const [project, setProject] = useState([]);
    const things = ['Business', 'Individual'];
    const thing = things[Math.floor(Math.random()*things.length)];


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
            <div style={{marginTop: '50px'}}>
                <UserMenu />
            </div>
            <div className="container-fluid p-4 py-5 mx-auto ">
                <div className="row d-flex justify-content-center mt-3" style={{marginLeft: "70px"}}>
                    <div className="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
                        <h3>Update Your Project</h3>
                        <div className="card">
                            <form className="form-card mt-5" style={{padding: "45px"}}>
                                <div className="row justify-content-between text-left">
                                    <div className="form-group col-sm-6 flex-column d-flex">
                                        <label className="form-control-label px-3">
                                            Type of project
                                        </label>
                                        <input type="text" id="type" name="type" readOnly value={thing}/>
                                    </div>
                                    <div className="form-group col-sm-6 flex-column d-flex">
                                        <label className="form-control-label px-3">
                                            Title <span className="text-danger"> *</span>
                                        </label>
                                        <input type="text" id="title" name="title"  value={project.title}/>
                                    </div>
                                </div>
                                <div className="row justify-content-between text-left">
                                    <div className="form-group col-sm-6 flex-column d-flex">
                                        <label className="form-control-label px-3">
                                            Project description
                                            <span className="text-danger"> *</span>
                                        </label>
                                        <textarea type="text" id="description" name="description" value={project.description} />
                                    </div>
                                    <div className="form-group col-sm-6 flex-column d-flex">
                                        <label className="form-control-label px-3">
                                            Slogan for your projet <span className="text-danger"> *</span>
                                        </label>
                                        {
                                            project.bio ? <input type="text" id="bio" name="bio" value={project.bio} />:
                                                <input type="text" id="bio" name="bio" value="######" />
                                        }
                                    </div>
                                </div>
                                <div className="row justify-content-between text-left">
                                    <div className="form-group col-sm-6 flex-column d-flex">
                                        <label className="form-control-label px-3">
                                            Fund Objectif <span className="text-danger"> *</span>
                                        </label>
                                        <input type="number" id="obejFund" name="obejFund" value={project.objectiveFund} />
                                    </div>
                                    <div className="form-group col-sm-6 flex-column d-flex">
                                        <label className="form-control-label px-3">
                                            Cover image
                                            <span className="text-danger"> *</span>
                                        </label>
                                        <input type="file" id="photo" name="photo"  />
                                    </div>
                                </div>
                                <div className="row justify-content-between text-left">
                                    <div className="form-group col-sm-6 flex-column d-flex">
                                        <label className="form-control-label px-3">
                                            Presentation video (recommended)
                                        </label>
                                        <input type="file" id="video" name="video"  />
                                    </div>
                                    <div className="form-group col-sm-6 flex-column d-flex">
                                        <label className="form-control-label px-3">
                                            What will the collection be used for? <span className="text-danger"> *</span>
                                        </label>
                                        <input type="text" id="reason" name="reason" />
                                    </div>
                                </div>
                                <div className="fac alert">
                                    <h3 className="font"><b>FAQ</b></h3>
                                    <a href="#" className="text-primary hr">
                                        + Add a Question
                                    </a>
                                </div>

                                <div className="row justify-content-end">
                                    <div className="form-group col-sm-6">
                                        <button type="submit" className="btn-block btn-primary">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    )
}
