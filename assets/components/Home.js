import React from "react";
import Header from "./menu/Header";
import Navbar from "./menu/Navbar";
import Profile from "./user/Profile";
import UserMenu from "./user/UserMenu";
import InfoPersonel from "./user/InfoPersonel";

export default class Home extends React.Component {
    render() {
        return (
            <div>
                <div className="container row col-11" >
                    <div>
                        <UserMenu />
                    </div>
                    <div style={{marginLeft: "140px"}}>
                        <InfoPersonel />
                    </div>
                </div>
            </div>
        )
    }
}