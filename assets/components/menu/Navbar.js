import React from "react";

export default class Navbar extends React.Component {
    render() {
        return (
            <header id="header" className="hoc clear mb-0">
                <div id="logo" className="fl_left">
                    <h1><a href="index.html">Giving Give</a></h1>
                </div>
                <nav id="mainav" className="fl_right">
                    <ul className="clear">
                        <li><a className="drop" href="#">Projects</a>
                            <ul>
                                <li><a href="pages/gallery.html">Industry</a></li>
                                <li><a href="pages/full-width.html">Business</a></li>
                                <li><a href="pages/sidebar-left.html">Agriculture</a></li>
                                <li><a href="pages/sidebar-right.html">Culture</a></li>
                                <li><a href="pages/basic-grid.html">Sport</a></li>
                                <li><a href="pages/font-icons.html">Educational</a></li>
                            </ul>
                        </li>

                        <li><a href="#">How it works</a></li>
                    </ul>
                </nav>
            </header>

        )
    }
}