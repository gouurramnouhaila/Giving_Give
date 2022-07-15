import React from "react";
import '../../styles/layout/styles/inputFileStyle.css';
import '../../styles/layout/scripts/form';

export default class AddProject extends React.Component {

    constructor() {
        super();

        this.handleFormSubmit = this.handleFormSubmit.bind(this);

        this.title = React.createRef();
        this.description = React.createRef();
        this.fundObjective = React.createRef();
        this.slogan = React.createRef();
        this.image = React.createRef();
        this.video = React.createRef();
    }

     handleFormSubmit(event) {
        event.preventDefault();

        const { onNewProjectSubmit } = this.props;

        const title = this.title.current;
        const description = this.description.current;
        const fundObjective = this.fundObjective.current;
        const slogan = this.slogan.current;
        const image = this.image.current;
        const video = this.video.current;

        console.log("I love when a good form submit");

        onNewProjectSubmit(title.value, description.value, fundObjective.value, slogan.value, image.value, video.value);
     }


    render() {

        return (
            <div className="container-fluid px-1 py-5 mx-auto mt-4">
                <div className="row d-flex justify-content-center">
                    <div className="col-xl-7 col-lg-8 col-md-9 col-11 text-center mt-4">
                        <h3>Create Your Project</h3>
                        <p className="text-primary">Just answer a few questions<br /> so that we can personalize the right
                            experience for you.</p>
                        <div className="card">
                            <h5 className="text-center mb-4">Presentation</h5>
                            <form className="form-card" onSubmit={ this.handleFormSubmit }>
                                <div className="row justify-content-between text-left">
                                    <div className="form-group col-sm-6 flex-column d-flex">
                                        <label className="form-control-label px-3">
                                            Title <span className="text-danger"> *</span>
                                        </label>
                                        <input type="text" id="title" ref={ this.title } />
                                    </div>
                                    <div className="form-group col-sm-6 flex-column d-flex">
                                        <label className="form-control-label px-3">
                                            Project description
                                            <span className="text-danger"> *</span>
                                        </label>
                                        <input type="text" id="description" ref={ this.description } className="in"/>
                                    </div>
                                </div>
                                <div className="row justify-content-between text-left">
                                    <div className="form-group col-sm-6 flex-column d-flex">
                                        <label className="form-control-label px-3">
                                            Fund Objective <span className="text-danger"> *</span>
                                        </label>
                                        <input type="number" id="obejFund" ref={this.fundObjective} />
                                    </div>
                                    <div className="form-group col-sm-6 flex-column d-flex">
                                        <label className="form-control-label px-3">
                                            Slogan for your projet <span className="text-danger"> *</span>
                                        </label>
                                        <textarea ref={this.slogan}></textarea>
                                    </div>
                                </div>
                                <div className="row justify-content-between text-left">
                                    <div className="form-group col-sm-6 flex-column d-flex">
                                        <label className="form-control-label px-3">
                                            Cover image
                                            <span className="text-danger"> *</span>
                                        </label>
                                        <input type="file" id="photo" ref={this.image} />
                                        <div className="alert alert-primary" role="alert">
                                            <b>Choose your cover image carefully:</b>
                                            <ul>
                                                <li>Add a well framed visual, of good quality (not pixelated) and which represents your project well.
                                                </li>
                                                <li>Keep the visual simple: no need to add text or make a GIF to convince. Your visual is always accompanied by the title of your project and prefer the description to go into details.
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div className="form-group col-sm-6 flex-column d-flex">
                                        <label className="form-control-label px-3">
                                            Presentation video (recommended)
                                        </label>
                                        <input type="file" id="video" ref={this.video} />
                                        <div className="alert alert-primary" role="alert">
                                            <ul>
                                                <li>your presentation will be effective with a video of 2 minutes maximum
                                                </li>
                                                <li>make sure your video is viewable
                                                </li>
                                            </ul>
                                        </div>
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

AddProject.propTypes = {

}