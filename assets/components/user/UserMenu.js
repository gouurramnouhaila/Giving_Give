import React from "react";
import '../../styles/layout/styles/menuUser.css';
import {Link, NavLink} from "react-router-dom";

export default class UserMenu extends React.Component {
    render() {
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
                            <Link to="profile" className="text-secondary"> My Profile
                            </Link>
                        </button>
                    </li>
                    <li className="menu-item mb-2 m-lef">
                        <button className="menu-button">
                            <Link to="contributions" className="text-secondary">
                                My Contributions
                            </Link>
                        </button>
                    </li>
                    <li className="menu-item mb-2 m-lef">
                        <button className="menu-button">
                            <Link to="projects" className="text-secondary">
                                My Projects
                            </Link>
                        </button>
                    </li>
                    <li className="menu-item mb-2 m-lef">
                        <button className="menu-button">
                            <Link to="favourites" className="text-secondary">
                                 My Favorites
                            </Link>
                        </button>
                    </li>
                </ul>
            </nav>
        )
    }
}