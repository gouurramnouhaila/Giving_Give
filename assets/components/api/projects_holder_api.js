export function getProjectHolder(id) {
    return fetch('/api/projectHolder/'+id)
        .then(response => {
            return response.json()
        });
}
