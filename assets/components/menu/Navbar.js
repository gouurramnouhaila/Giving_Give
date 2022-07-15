import React from "react";
import {Link} from "react-router-dom";

export default class Navbar extends React.Component {
    render() {
        return (
            <header id="header" className="hoc clear mb-0">
                <div id="logo" className="fl_left">
                    <h1><a href="/">Giving Give</a></h1>
                </div>
                <nav id="mainav" className="fl_right">
                    <ul className="clear">
                        <li>
                            <Link to="/all/projects" >
                                discover the projects
                            </Link>
                        </li>

                        <li style={{marginRight: '50px',marginLeft: '50px'}}>
                            <Link to="/projects/add">
                                launch a project
                            </Link>
                        </li>

                        <li>
                            <Link to="/all/projects" className="drop">
                                <i className="fas fa-user-circle" style={{fontSize: '40px',color: 'white'}}></i>
                            </Link>
                            <ul>
                                <li><Link to="/profile">My Profile</Link></li>
                                <li><Link to="/contributions">My Contributions</Link></li>
                                <li><Link to="/projects">My Projects</Link></li>
                                <li><Link to="/favourites">My Favourites</Link></li>
                                <li><Link to="/">Logout</Link></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </header>

        )
    }
}