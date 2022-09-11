import React from "react";
import './../../styles/layout/styles/cardProfile.css';


export default class Contributors extends React.Component {
    render() {
        return (
            <div className="table-users">
                <div className="header">Users</div>

                <table cellSpacing="0">
                    <thead>
                    <tr>
                        <th>Picture</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                    </tr>
                    </thead>

                   <tbody>
                   <tr>
                       <td><img src="https://picsum.photos/50/50" alt=""/></td>
                       <td>Jane Doe</td>
                       <td>jane.doe@foo.com</td>
                       <td>01 800 2000</td>
                   </tr>

                   <tr>
                       <td><img src="https://picsum.photos/50/50" alt=""/></td>
                       <td>John Doe</td>
                       <td>john.doe@foo.com</td>
                       <td>01 800 2000</td>

                   </tr>

                   <tr>
                       <td><img src="https://picsum.photos/50/50" alt=""/></td>
                       <td>John Smith</td>
                       <td>john.smith@foo.com</td>
                       <td>01 800 2000</td>
                   </tr>
                   </tbody>
                </table>
            </div>
        )
    }
}