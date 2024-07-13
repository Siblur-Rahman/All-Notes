import Blog from "../../Shared/Blog";
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