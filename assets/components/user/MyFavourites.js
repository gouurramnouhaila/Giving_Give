import React from "react";
import '../../styles/layout/styles/inputFileStyle.css';
import '../../styles/layout/scripts/form';

export default class MyFavourites extends React.Component {
    render() {
        return (
            <div className="container">
                <div className="row col-11 m-5">
                    <div className="text-center m-lef-80" style={{marginLeft: "250px"}}>
                        <p className="mb-5">Adding a project to your favorites will allow you to follow its news.</p>
                        <button className="btn btn-primary">Discover the projects
                        </button>
                    </div>
                </div>
            </div>
        )
    }
}
