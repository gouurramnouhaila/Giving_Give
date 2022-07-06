import React from 'react';
import ReactDOM from 'react-dom';
import './styles/layout/styles/layout.css';
import Header from "./components/menu/Header";
import Navbar from "./components/menu/Navbar";
import AddProject from "./components/project/AddProject";
import MakeDonation from "./components/don/MakeDonForm";
import Projects from "./components/project/Projects";
import UpdateProject from "./components/project/UpdateProject";
import axios from "axios";

class App extends React.Component {

    constructor() {
        super();

        this.state = {
            entries: [],
            loading: true,
            projects: []
        };
    }

    getProjects() {
        axios.get(`http://localhost:8000/api/projects`).then(projects => {
            this.setState({ projects: projects.data, loading: false})
        })
    }

    componentDidMount() {
        this.getProjects();
    }

    handleNewProjectSubmit(title, description, fundObjective, slogan, image, video) {
        console.log('TODO - handle Form items');

        console.log(title, description, fundObjective, slogan, image, video);
    }

    render() {

        return (
            <div>
                <Header />
                <Navbar />
                <AddProject onNewProjectSubmit={this.handleNewProjectSubmit}/>
            </div>


        );
    }
}

ReactDOM.render(<App />, document.getElementById('root'));