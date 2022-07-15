import React from "react";
import '../../styles/layout/styles/inputFileStyle.css';
import '../../styles/layout/scripts/form';
import UserMenu from "./UserMenu";
import InfoPersonel from "./InfoPersonel";
import {BrowserRouter, Route, Routes} from "react-router-dom";
import MyFavourites from "./MyFavourites";
import MyContributions from "./MyContributions";
import MyProjects from "./MyProjects";
import Home from "../Home";


export default class Profile extends React.Component {

    render() {
        return (
            <div className="container row col-11" >
                <div>
                    <UserMenu />
                </div>
                <div style={{marginLeft: "140px"}}>
                    <InfoPersonel />
                </div>
            </div>

        )
    }
}