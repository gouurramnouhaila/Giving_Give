import React from 'react';
import { Outlet } from 'react-router';
import Navbar from "./components/menu/Navbar";


export default () => {
    return (
        <>
            <Navbar />
            <Outlet />
        </>
    );
};