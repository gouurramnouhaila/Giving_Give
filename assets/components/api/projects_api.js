import axios from "axios";

export function getProjects() {
    return fetch('/api/projects')
        .then(response => {
            return response.json()
        });
}

export function getProjectsByUser(id) {
    return fetch('/api/project/user/'+id)
        .then(response => {
            return response.json()
        });
}

export function getProject(id) {
    return fetch('/api/projects/'+id)
        .then(response => {
            return response.json()
        });
}

export function deleteProject(id) {
    return fetch('/api/projects/delete/'+id,
        {
            method: 'DELETE'
        });
}




export function createProject(project) {
    return fetch('/api/projects/add', {
        method: 'POST',
        body: JSON.stringify(project),
        headers: {
            'Content-Type': 'application/json',
        }
    })
}

export function editProject(project) {
    return fetch(`/api/projects/update/${project.id}`, {
        method: 'PUT',
        body: JSON.stringify(project),
        headers: {
            'Content-Type': 'application/json',
        }
    })
}
