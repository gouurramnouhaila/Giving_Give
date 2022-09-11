import React, {useEffect, useState} from 'react';
import './styles/layout/styles/layout.css';
import axios from "axios";
import uuid from 'react-native-uuid';
import * as ReactDOMClient from 'react-dom/client';;
import {createProject, deleteProject} from "./components/api/projects_api";
import {loginApi} from "./components/api/login_api";
import Home from "./components/Home";
import {HashRouter, Route, Routes, useSearchParams} from "react-router-dom";
import Login from "./components/security/Login";
import WithoutNav from "./components/WithoutNav";
import WithNav from "./components/WithNav";
import {getProjectHolder} from "./components/api/projects_holder_api";
import Profile from "./components/user/Profile";
import MakeDonation from "./components/don/MakeDonForm";
import Project from "./components/project/Project";
import MyProjects from "./components/user/MyProjects";
import MyContributions from "./components/user/MyContributions";
import AddProject from "./components/project/AddProject";
import WithOneNav from "./WithOneNav";
import {ProtectedRoute} from "./components/security/ProtectedRoute";
import Logout from "./components/security/Logout";
import {Register} from "./components/security/Register";
import {addUser} from "./components/api/user_api";
import UpdateProject from "./components/project/UpdateProject";
import DetailProject from "./components/user/DetailProject";





/*const getProjectsByUser = () => {
    const user = localStorage.getItem('currentUser').toString();
    /*getProjectsByUser(user[6]).then(projects => {
        this.setState({ projectByUser: projects.data, loading: false})
    })
}*/

/*const getContributors = () => {
    axios.get(`http://127.0.0.1:8000/api/contributors`).then(contributors => {
        //this.setState({ contributors: contributors.data, loading: false})
    })
}

const handleNewProjectSubmit = (title, description, fundObjective, image, video) => {
    /*const projects = this.state.projects;
    const newProject = {
        id: uuid.v4(),
        title: title,
        description: description,
        photo: image,
        video: video,
        objectiveFund: fundObjective
    }

    projects.push(newProject);

    createProject(newProject)
        .then(data => {
            console.log(data);
        })

    this.setState({ projects: projects });*/
//}



/*const handleDeleteProject = (id) => {
    this.setState((prevState) => {
        /*return {
            projects: prevState.projects.filter(project => project.id !== id)
        }
    })
}*/

function App(props) {

    const [projects, setProjects] = useState([]);
    const [categories, setCategories] = useState([]);
    const [credentialsError, setCredentialsError] = useState('');
    const [myContributors, setMyContributors] = useState([]);
    const [contributors, setContributors] = useState([]);
    const [auth, setAuth] = useState(false);
    const [message, setMessage] = useState("");
    const [deleteMessage, setDeleteMessage] = useState("");

    const user = JSON.parse(localStorage.getItem('currentUser'));

    useEffect( () => {
        getProjects()
    }, []);

    useEffect( () => {
        getCategories()
    }, []);

    useEffect( () => {
        getContributorsByProjectHolder()
    }, []);

    useEffect(() => {
        console.log('useEffect ran. credentialsError is: ', credentialsError);
    }, [credentialsError]);

    useEffect(() => {
        console.log('useEffect ran. message register is: ', message);
    }, [message]);

    useEffect(() => {
        if(user) {
            setAuth(true)
        }
    }, [auth]);

    const getContributorsByProjectHolder = async () => {
        if (user) {
            axios.get(`http://localhost:8000/api/contributors/projectHolder/`+user.id).then(res => {
                setMyContributors(prevState => {
                    return {...prevState, ...res.data};
                });
            })
        }

    }

    const getProjects = async () => {
        axios.get(`http://localhost:8000/api/projects`).then(res => {
            setProjects(res.data);
        })
    }

    const getCategories = () => {
        axios.get(`http://localhost:8000/api/categories/`).then(res => {
            setCategories(res.data);
        })
    }

    const handleLogin = (data)  => {
        loginApi(data).then(response => {
            response.json().then(
                function(result) {
                    if (result.code === 401) {
                        setCredentialsError("Password or login is incorrect")
                        setAuth(false)
                    }else {
                        getProjectHolder(result.userId.toString()).then( res => {
                            localStorage.setItem('currentUser', JSON.stringify(res))
                        })
                        localStorage.setItem('token', result.token.toString())
                        setAuth(true);
                        setCredentialsError('');
                    }
                })
        });


    }

    const handleNewProjectSubmit = (title, description, fundObjective, image, video, category) => {

        const newProject = {
            id: uuid.v4(),
            title: title,
            description: description,
            photo: image,
            video: video,
            objectiveFund: fundObjective,
            projectHolderId: user.id,
            category: category
        }


        createProject(newProject)
            .then(data => {
                console.log(data);
            })

        setProjects(prevState => {
            return {...prevState, ...projects, newProject};
        });
    }

    const handleRegister = (firstName, lastName, email, password, birthday, role, photo, bio) => {

        const newContributor = {
            id: uuid.v4(),
            firstName: firstName,
            lastName: lastName,
            email: email,
            password: password,
            birthday: birthday
        }

        const newPP = {
            id: uuid.v4(),
            firstName: firstName,
            lastName: lastName,
            email: email,
            password: password,
            birthday: birthday,
            photo: photo,
            bio: bio
        }

        if (role == "c") {
            fetch('/api/contributor/add', {
                method: 'POST',
                body: JSON.stringify(newContributor),
                headers: {
                    'Content-Type': 'application/json',
                }
            }).then(data => {
                if(data.status === 200) {
                    setMessage("your account created with success")
                }

            })

            setContributors(prevState => {
                return {...prevState, ...contributors, newContributor};
            });
        } else  if (role == "p") {
            fetch('/api/projectHolder/add', {
                method: 'POST',
                body: JSON.stringify(newPP),
                headers: {
                    'Content-Type': 'application/json',
                }
            }).then(data => {
                if(data.status === 200) {
                    setMessage("your account created with success")
                }

            })

            setContributors(prevState => {
                return {...prevState, ...contributors, newPP};
            });
        }
    }



return <div>

<HashRouter>
<Routes>
<Route element={<WithNav />}>
    <Route path="/" element={<Home  projects={projects} categories={categories} />} />
</Route>

<Route element={<WithNav />}>
    <Route path="/:username/profile" element={<Profile />} />
</Route>
<Route element={<WithNav />}>
    <Route path="/:username/contributors" element={<MyContributions myContributors={myContributors} />} />
</Route>
<Route element={<WithNav />}>
    <Route path="/:username/projects" element={<MyProjects  />} />
</Route>
<Route element={<WithNav />}>
    <Route path="/fund/:id/" element={<MakeDonation />} />
</Route>
<Route element={<WithNav />}>
    <Route path="/projects/:id/" element={<Project />} />
</Route>
    <Route element={<WithNav />}>
        <Route path="/projects/edit/:id/" element={<UpdateProject />} />
    </Route> <Route element={<WithoutNav />}>
    <Route path="/:firstName/projects/:id/" element={<DetailProject />} />
    </Route>
<Route element={<WithoutNav />}>
    <Route path="/login" element={<Login onLogin={handleLogin} credentialsError={credentialsError} auth={auth} />} />
</Route>
<Route element={<WithoutNav />}>
    <Route path="/logout" element={<Logout  />} />
</Route>

<Route path="/register" element={<Register onNewUser={handleRegister} message={message} />} ></Route>

<Route element={<WithOneNav />}>
    <Route
        path="/projects/add"
        element={
            <ProtectedRoute>
                <AddProject  onNewProjectSubmit={ handleNewProjectSubmit } />
            </ProtectedRoute>
        }
    />
</Route>
</Routes>
</HashRouter>
</div>
}

const root = ReactDOMClient.createRoot(document.getElementById('root'));
root.render(
<React.StrictMode>
<App />
</React.StrictMode>
);
