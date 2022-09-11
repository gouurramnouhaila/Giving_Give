import React from 'react';
import { Outlet } from 'react-router';
import Navbar from "./menu/Navbar";
import Header from "./menu/Header";

export default () => {
    return (
        <>
            <Header />
            <Navbar />
            <Outlet />
        </>
    );
};