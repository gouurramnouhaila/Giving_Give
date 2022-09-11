import React from "react";
import "../../styles/layout/styles/cardList.css";
import UserMenu from "./UserMenu";
import './../../styles/layout/styles/cardProfile.css';
import InfoPersonel from "./InfoPersonel";



export default function MyContributors(props)   {

    return (
        <div >
            <div style={{marginTop: '50px'}}>
                <UserMenu />
            </div>
            <div  >
                <div className="table-users">
                    <div className="header" style={{width: '800px'}} >Users</div>

                    <table cellSpacing="0" className="w-800">
                        <thead>
                        <tr>
                            <th>Picture</th>
                            <th>FirstName</th>
                            <th>LastName</th>
                            <th>Phone</th>
                        </tr>
                        </thead>

                        <tbody>
                        { Object.values(props.myContributors).map(contributor =>

                            <tr key={contributor.id}>
                                <td><img src="https://picsum.photos/50/50" alt=""/></td>
                                <td>{contributor.firstName}</td>
                                <td>{contributor.lastName}</td>
                                <td>{contributor.email}</td>
                            </tr>
                        )}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    )
}