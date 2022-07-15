import React from "react";
import '../../styles/layout/styles/inputFileStyle.css';
import '../../styles/layout/scripts/form';

export default class UpdateProject extends React.Component {
    render() {
        return (
            <div className="container-fluid p-4 py-5 mx-auto ">
                <div className="row d-flex justify-content-center mt-3">
                    <div className="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
                        <h3>Update Your Project</h3>
                        <div className="card">
                            <form className="form-card mt-5" onSubmit="event.preventDefault()">
                                <div className="row justify-content-between text-left">
                                    <div className="form-group col-sm-6 flex-column d-flex">
                                        <label className="form-control-label px-3">
                                            Title <span className="text-danger"> *</span>
                                        </label>
                                        <input type="text" id="title" name="title" /></div>
                                    <div className="form-group col-sm-6 flex-column d-flex">
                                        <label className="form-control-label px-3">
                                            Project description
                                            <span className="text-danger"> *</span>
                                        </label>
                                        <input type="text" id="description" name="description" /></div>
                                </div>
                                <div className="row justify-content-between text-left">
                                    <div className="form-group col-sm-6 flex-column d-flex">
                                        <label className="form-control-label px-3">
                                            Fund Objectif <span className="text-danger"> *</span>
                                        </label>
                                        <input type="number" id="obejFund" name="obejFund" />
                                    </div>
                                    <div className="form-group col-sm-6 flex-column d-flex">
                                        <label className="form-control-label px-3">
                                            Slogan for your projet <span className="text-danger"> *</span>
                                        </label>
                                        <textarea></textarea>
                                    </div>
                                </div>
                                <div className="row justify-content-between text-left">
                                    <div className="form-group col-sm-6 flex-column d-flex">
                                        <label className="form-control-label px-3">
                                            Cover image
                                            <span className="text-danger"> *</span>
                                        </label>
                                        <input type="file" id="photo" name="photo" />
                                    </div>
                                    <div className="form-group col-sm-6 flex-column d-flex">
                                        <label className="form-control-label px-3">
                                            Presentation video (recommended)
                                        </label>
                                        <input type="file" id="video" name="video" />
                                    </div>
                                </div>
                                <div className="row justify-content-between text-left">
                                    <div className="form-group col-sm-6 flex-column d-flex">
                                        <label className="form-control-label px-3">
                                            What will the collection be used for? <span className="text-danger"> *</span>
                                        </label>
                                        <input type="text" id="obejFund" name="obejFund" />
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
}