import { Outlet } from "react-router-dom";
import '../components/CommonCSS/CommonCSS.css'
import '../components/CommonJS/CommonJS.js'
import Header from "../components/Header.jsx";
import {Active} from "../components/CommonJS/CommonJS.js";
import { useEffect } from "react";

const Home = () => {
        useEffect(() =>{
        Active()
    })
    return (
        <div>
            <Header/>
                <Outlet/>
        </div>
    );
};

export default Home;