import React from "react";

export default class Header extends React.Component {
    render() {
        return (
            <div>
                <div className="wrapper row0">
                <div id="topbar" className="hoc clear">
                    <div className="fl_left">
                        <ul className="nospace">
                            <li><i className="fas fa-mobile-alt rgtspace-5"></i> +00 (123) 456 7890</li>
                            <li><i className="far fa-envelope rgtspace-5"></i> info@domain.com</li>
                        </ul>
                    </div>
                    <div className="fl_right">
                        <ul className="nospace">
                            <li><a href="#"><i className="fas fa-home"></i></a></li>
                            <li><a href="#" title="Help Centre"><i className="far fa-life-ring"></i></a></li>
                            <li><a href="#" title="Login"><i className="fas fa-sign-in-alt"></i></a></li>
                            <li><a href="#" title="Sign Up"><i className="fas fa-edit"></i></a></li>
                            <li id="searchform">
                                <div>
                                    <form action="#" method="post">
                                        <fieldset>
                                            <legend>Quick Search:</legend>
                                            <input type="text" placeholder="Enter search term&hellip;" />
                                            <button type="submit"><i className="fas fa-search"></i></button>
                                        </fieldset>
                                    </form>
                                </div>
                            </li>
                            <li className="nav-item dropdown">
                                <a className="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                   data-toggle="dropdown">
                                    Dropdown
                                </a>
                                <div className="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a className="dropdown-item" href="#">Action</a>
                                    <a className="dropdown-item" href="#">Another action</a>
                                    <div className="dropdown-divider"></div>
                                    <a className="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
                <div className="wrapper row1">
                    <section id="ctdetails" className="hoc clear">
                        <ul className="nospace clear">
                            <li className="one_quarter first">
                                <div className="block clear"><a href="#"><i className="fas fa-phone"></i></a>
                                    <span><strong>Give us a call:</strong> +00 (123) 456 7890</span></div>
                            </li>
                            <li className="one_quarter">
                                <div className="block clear"><a href="#"><i className="fas fa-envelope"></i></a>
                                    <span><strong>Send us a mail:</strong> support@domain.com</span></div>
                            </li>
                            <li className="one_quarter">
                                <div className="block clear"><a href="#"><i className="fas fa-clock"></i></a>
                                    <span><strong> Mon. - Sat.:</strong> 08.00am - 18.00pm</span></div>
                            </li>
                            <li className="one_quarter">
                                <div className="block clear"><a href="#"><i className="fas fa-map-marker-alt"></i></a>
                                    <span><strong>Come visit us:</strong> Directions to <a
                                        href="#">our location</a></span></div>
                            </li>
                        </ul>
                    </section>
                </div>
            </div>

        )
    }

}