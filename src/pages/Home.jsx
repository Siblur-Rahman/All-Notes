import { Outlet } from "react-router-dom";
import '../components/CommonCSS/CommonCSS.css'
import '../components/CommonJS/CommonJS.js'
import Header from "../components/Header.jsx";
const Home = () => {
    return (
        <div>
            <Header/>
            <div className="content">
                <Outlet/>
            </div>
        </div>
    );
};

export default Home;