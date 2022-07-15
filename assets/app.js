import React from 'react';
import ReactDOM from 'react-dom';
import './styles/layout/styles/layout.css';
import Header from "./components/menu/Header";
import Navbar from "./components/menu/Navbar";
import axios from "axios";
import uuid from 'react-native-uuid';
import {getProjects} from "./components/api/projects_api";
import Profile from "./components/user/Profile";
import {BrowserRouter, Link, Route, Routes} from "react-router-dom";
import MyFavourites from "./components/user/MyFavourites";
import MyContributions from "./components/user/MyContributions";
import MyProjects from "./components/user/MyProjects";
import * as ReactDOMClient from 'react-dom/client';
import Home from "./components/Home";
import UserMenu from "./components/user/UserMenu";
import Projects from "./components/project/Projects";
import AddProject from "./components/project/AddProject";
import Login from "./components/security/Login";


class App extends React.Component {

    constructor() {
        super();

        this.state = {
            entries: [],
            loading: true,
            projects: []
        };

        this.handleNewProjectSubmit = this.handleNewProjectSubmit.bind(this);
        this.handleDeleteProject = this.handleDeleteProject.bind(this);
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
        const projects = this.state.projects;
        const newProject = {
            id: uuid.v4(),
            title: title,
            description: description,
            photo: image,
            video: video,
            objectiveFund: fundObjective
        }

        projects.push(newProject);
        this.setState({ projects: projects });

        console.log(title, description, fundObjective, slogan, image, video);
    }

    handleDeleteProject(id) {
        console.log(getProjects());
        this.setState((prevState) => {
            return {
                projects: prevState.projects.filter(project => project.id !== id)
            }
        })
    }


    render() {
        return (
            <div>


                <Login />
            </div>
        );
    }
}

const root = ReactDOMClient.createRoot(document.getElementById('root'));
root.render(
    <React.StrictMode>
        <App />
    </React.StrictMode>
);
