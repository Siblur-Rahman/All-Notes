import {NavLink } from "react-router-dom";
import '../components/CommonCSS/CommonCSS.css'
const Header = () => {
    return (
        <div className="header">
            <>
                <NavLink  to={'/'}>Home</NavLink>
                <NavLink  to={'/P-Hero'}>P-HERO</NavLink>
                <NavLink  to={'/JavaScript'}>JavaScript</NavLink>
                <NavLink  to={'/react'}>React</NavLink>
                <NavLink  to={'/HTML'}>HTML</NavLink>
                <NavLink  to={'/CSS'}>CSS</NavLink>
                <NavLink  to={'/tools'}>Tools</NavLink>
                <NavLink  to={'/'}></NavLink>
                <NavLink  to={'/'}></NavLink>
                <NavLink  to={'/'}></NavLink>
                <NavLink  to={'/'}></NavLink>
                <NavLink  to={'/'}></NavLink>
                {/* <a href="../../html/html_topics/intro.php" className="html_active">HTML</a>
                <a href="../../css_notes/css_topics/001.introduction.php" className="css_active">CSS</a>
                <a href="../../css_tailwind/tailwind_topics/intro.php" className="tailwind_active">TAILWIND</a>
                <a href="../../javascript/js_intro/js_intro.php" className="js_active" >JAVASCRIPT</a>
                <a href="../../react/react_topics/some_command_ext.php" className="react_active">REACT</a>
                <a href="../../backend/backend_intro/backend_intro.php" className="backend_active">BACKEND</a>
                <a href="../../projects/projects.php" className="projects" target="_blank">PROJECTS</a>
                <a href="../../english/various_topics/dailyRoutine.php" className="english_active">ENGLISH</a>
                <a href="../../tools/my_notes/keyboard_shortcut.php">Tools</a> */}
            </>
        </div>
    );
};

export default Header;