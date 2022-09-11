import axios from "axios";

export function getAllCategories() {
    return fetch('/api/categories/')
        .then(response => {
            return response.json()
        });
}