import React, {useState} from "react";
import '../../styles/layout/styles/inputFileStyle.css';
import '../../styles/layout/scripts/form';

export default function  InfoPersonel(props){


    const user = JSON.parse(localStorage.getItem('currentUser'));
    const [firstName ,setFirstName] = useState(null);
    const [lastName ,setLastName] = useState(null);
    const [email ,setEmail] = useState(null);



    const handleChangeFirstName = (event) => {
            setFirstName(event.target.value);
        }
    const handleChangeLastName = (event) => {
        setLastName(event.target.value);
    }
    const handleChangeEmail = (event) => {
        setEmail(event.target.value);
    }

        return (
            <div className="container-fluid px-1 py-5 mx-auto">
                <div className="row d-flex justify-content-center">
                    <div className="col-xl-7 col-lg-8 col-md-9 col-11 m-lef-80">
                        <div className="card p-5">
                            <h4 className="bold mt-2">Personnel Information's</h4>
                            <form className="form-card mt-3" onChange={e => console.log(e)}>
                                <div className="row justify-content-between text-left">
                                    <div className="form-group col-sm-6 flex-column d-flex">
                                        <div id="file-upload-form" className="uploader">
                                            <input id="file-upload" type="file" name="fileUpload" accept="image/*"/>
                                            <label htmlFor="file-upload" id="file-drag">
                                                <img id="file-image" src="#" alt="Preview" className="hidden" />
                                                    <div id="start">
                                                        <i className="fa fa-download" aria-hidden="true"></i>
                                                        <div>Select a file or drag here</div>
                                                        <div id="notimage" className="hidden">Please select an image
                                                        </div>
                                                        <span id="file-upload-btn" className="btn btn-primary">Select a file</span>
                                                    </div>
                                                    <div id="response" className="hidden">
                                                        <div id="messages"></div>
                                                        <progress className="progress" id="file-progress" value="0">
                                                            <span>0</span>%
                                                        </progress>
                                                    </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div className="row justify-content-between text-left">
                                    <div className="form-group col-sm-6 flex-column d-flex">
                                        <label className="form-control-label p-0">
                                            <b>FirstName</b>
                                        </label>
                                        <input type="text" id="firstName" defaultValue={user.firstName} onChange={handleChangeFirstName} />
                                    </div>
                                    <div className="form-group col-sm-6 flex-column d-flex">
                                        <label className="form-control-label p-0">
                                            <b>LastName</b>
                                        </label>
                                        <input type="text" id="lastName" defaultValue={user.lastName} onChange={handleChangeLastName}/>
                                    </div>
                                </div>
                                <div className="row justify-content-between text-left">
                                    <div className="form-group col-sm-6 flex-column d-flex">
                                        <label className="form-control-label p-0">
                                            <b>Pseudo name</b>
                                        </label>
                                        <input type="text" id="pseudo" placeholder="#####" />
                                    </div>
                                </div>
                                <h4 className="bold mt-2 mb-4">Connection Information's</h4>
                                <div className="row justify-content-between text-left">
                                    <div className="form-group col-sm-6 flex-column d-flex">
                                        <label className="form-control-label p-0">
                                            <b>Email</b>
                                        </label>
                                        <input type="text" id="email" placeholder="exemple@gourram.com" defaultValue={user.email} onChange={handleChangeEmail}/>
                                    </div>
                                    <div className="form-group col-sm-6 flex-column d-flex">
                                        <label className="form-control-label p-0">
                                            <b>Password</b>
                                        </label>
                                        <input type="password" id="password" placeholder="********" />
                                    </div>
                                </div>
                                <h4 className="bold mt-2 mb-4">Delivery address</h4>
                                <div className="row justify-content-between text-left">
                                    <div className="form-group col-sm-6 flex-column d-flex">
                                        <label className="form-control-label p-0">
                                            <b>Country</b>
                                        </label>
                                        <input type="text" id="pseudo" defaultValue="Maroc" />
                                    </div>
                                    <div className="form-group col-sm-6 flex-column d-flex">
                                        <label className="form-control-label p-0">
                                            <b>City</b>
                                        </label>
                                        <input type="text" id="pseudo"  defaultValue="Casablanca" />
                                    </div>
                                </div>
                                <div className="row justify-content-between text-left">
                                    <div className="alert alert-primary" role="alert">
                                        <ul>
                                            <li>
                                                <b><i className="fas fa-exclamation-triangle m-1"></i></b>
                                                You can modify the delivery address directly on the “My contributions” page by clicking on the details of the contribution concerned.
                                            </li>
                                        </ul>
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
        )
}