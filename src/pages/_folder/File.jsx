import Blog from "../../Shared/Blog.jsx";
import FileLeftbar from './FileLeftbar.jsx';

const File = () => {
    return (
        <>
        <div className="leftBar">
            <FileLeftbar/>
        </div>    
        <div className="content">
         <Blog
         topic={'Topic'}
         />
        </div>
        </>
    );
};

export default File;