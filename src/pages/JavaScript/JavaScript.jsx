import Blog from "../../Shared/Blog.jsx";
import DOMDocument from "./HTML-DOM/DOMDocument.jsx";
import IntroDOM from "./HTML-DOM/IntroDOM.jsx";
import JavascriptLeftbar from './JavascriptLeftbar.jsx';

const Javascript = () => {
    return (
        <>
        <div className="leftBar">
            <JavascriptLeftbar/>
        </div>    
        <div className="content">
         <Blog
         topic={'Topic'}
         />
         <IntroDOM/>
         <DOMDocument/>
        </div>
        </>
    );
};

export default Javascript;