import Blog from "../../Shared/Blog.jsx";
import Assignments from "./Assignments.jsx";
import PHeroLeftbar from './PHeroLeftbar.jsx';

const PHero = () => {
    return (
        <>
        <div className="leftBar">
            <PHeroLeftbar/>
        </div>    
        <div className="content">
            <Assignments/>
         <Blog
         topic={'Topic'}
         />
        </div>
        </>
    );
};

export default PHero;