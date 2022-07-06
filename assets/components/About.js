import React from "react";

export default class About extends React.Component {
    render() {
        return (
            <div id="pageintro" className="hoc clear mt-0">
                <article>
                    <h3 className="heading">Successful crowdfunding starts here.</h3>
                    <p>Crush your crowdfunding goal with the know-how, best practices, and time-tested strategies that will take your campaign to the next level.</p>
                    <footer>
                        <ul className="nospace inline pushright">
                            <li><a className="btn" href="#">Join Now</a></li>
                            <li><a className="btn inverse" href="#">Tristique</a></li>
                        </ul>
                    </footer>
                </article>
            </div>
        )
    }
}