export function getProjects() {
    return fetch('/api/projects')
        .then(response => {
            return response.json()
        });
}