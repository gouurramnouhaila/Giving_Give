import {Navigate} from "react-router-dom";
import React from "react";


export const ProtectedRoute = ({ children }) => {
    const user = JSON.parse(localStorage.getItem('currentUser'));

    if (!user) {
        return <Navigate to="/login" />;
    }
    return children;
}