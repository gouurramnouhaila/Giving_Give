

export function addUser(user) {
    return fetch('/api/contributor/add', {
        method: 'POST',
        body: JSON.stringify(user),
        headers: {
            'Content-Type': 'application/json',
        }
    })
}