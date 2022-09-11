import React from "react";
import '../../styles/layout/styles/menuUser.css';
import {Link, NavLink, Route} from "react-router-dom";
import MyProjects from "./MyProjects";

export default class UserMenu extends React.Component {
    render() {
        const user = JSON.parse(localStorage.getItem('currentUser'));

        return (
            <nav className="menu">
                <ul className="menu-list">
                    <li className="menu-item context-buttons">
                        <button className="context-button" style={{ marginLeft: '32px'}}>
                            <i className="fas fa-user-circle mb-3" style={{fontSize: '50px'}}></i><br/>
                            <b>Nouhaila-Gourram</b>
                            <p className="text-secondary text-small">
                                GourramNouha@gmail.com
                            </p>
                        </button>
                    </li>
                </ul>
                <ul className="menu-list">
                    <li className="menu-item mb-2 m-lef">
                        <button className="menu-button">
                            <Link to={`/${user.firstName}/profile`}>My Profile</Link>
                        </button>
                    </li>
                    <li className="menu-item mb-2 m-lef">
                        <button className="menu-button">
                            <Link to={`/${user.firstName}/contributors`} className="text-secondary">
                                My Contributions
                            </Link>
                        </button>
                    </li>
                    <li className="menu-item mb-2 m-lef">
                        <button className="menu-button">
                            <Link to={`/${user.firstName}/projects`} className="text-secondary" >
                                My Projects
                            </Link>
                        </button>
                    </li>
                    <li className="menu-item mb-2 m-lef">
                        <button className="menu-button">
                            <Link to="/favourites" className="text-secondary">
                                 My Favorites
                            </Link>
                        </button>
                    </li>
                </ul>
            </nav>
        )
    }
}