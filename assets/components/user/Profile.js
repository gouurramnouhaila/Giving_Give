import React from "react";
import '../../styles/layout/styles/inputFileStyle.css';
import '../../styles/layout/scripts/form';
import UserMenu from "./UserMenu";
import InfoPersonel from "./InfoPersonel";


export default class Profile extends React.Component {

    render() {
        return (
            <div className="container row col-11" >
                <div>
                    <UserMenu />
                </div>
                <div  >
                    <InfoPersonel />
                </div>
            </div>

        )
    }
}