import React from "react";
import './../styles/layout/styles/card.css';
import Projects from "./project/Projects";
import Categories from "./category/Categories";
import Footer from "./menu/Footer";

export default function Home (props) {
        return (
                <div className="font-sys">
                    <div id="pageintro" className="hoc clear home" >
                        <article style={{paddingLeft: '60px'}}>
                            <h3 className="heading">About Us</h3>
                            <p>Giving Give is an online fundraising platform for charities, nonprofit organizations,
                                corporate foundations, and events.</p>
                            <footer>
                                <ul className="nospace inline pushright">
                                    <li><a className="btn btn-block btn-primary pt-2 fontSystem" href="#">Get a demo</a></li>
                                    <li>
                                        <a href="#" className="btn btn-outline-primary btn-block pt-2 fontSystem">Projects</a>
                                    </li>
                                </ul>
                            </footer>
                        </article>
                    </div>
                    <div>
                        <h3 className="center mtop font-nova">Crowdfunding for all your inspiring and committed projects</h3>
                        <Categories categories={props.categories} />
                    </div>

                    <div>
                        <h3 className="center mtop font-nova">Featured Project</h3>
                        <Projects getOneProjects={props.getOneProjects} projects={props.projects} />
                    </div>
                    <div>

                    </div>
                </div>
        )

}