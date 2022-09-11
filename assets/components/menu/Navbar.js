import React from "react";
import {Link, useNavigate} from "react-router-dom";

export default function  Navbar (props) {

    const user = JSON.parse(localStorage.getItem('currentUser'));
    const navigate = useNavigate();

    const redirectToHome = () => {
        navigate(`/`)
    }

    const logout = () => {
        localStorage.setItem('currentUser', '')
        localStorage.setItem('token', '')

        redirectToHome()
    }


    return (
        <header id="header" className="hoc clear mb-0" style={{fontFamily: 'system-ui'}} style={{marginLeft: '40px'}}>
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

                    {user ?

                        <li>
                            <Link to="/all/projects" className="drop">
                                <i className="fas fa-user-circle" style={{fontSize: '40px',color: 'white'}}></i>
                            </Link>
                            <ul>
                                <li><Link to={`/${user.firstName}/profile`}>My Profile</Link></li>
                                <li><Link to={`/${user.firstName}/contributors`} >My Contributions</Link></li>
                                <li><Link to={`/${user.firstName}/projects`} >My Projects</Link></li>
                                <li><Link to="/username/profile/favourites">My Favourites</Link></li>
                                <li><Link to="/logout">Logout</Link></li>
                            </ul>
                        </li>
                        : ''
                    }
                </ul>
            </nav>
        </header>
    )
}