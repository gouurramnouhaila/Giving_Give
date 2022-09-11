import {useEffect} from "react";
import {useNavigate} from "react-router-dom";
import React from "react";

export default function Logout () {
    const navigate = useNavigate();

    useEffect(() => {

        navigate("/", { replace: true });
        localStorage.removeItem('currentUser')
        localStorage.removeItem('token')

    }, []);

    return (
        <h1></h1>
    )

};