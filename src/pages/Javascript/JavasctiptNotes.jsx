
import Blog from "../../shared/Blog";
import Condition from "./Condition/Condition";
import Array from "./Array/Array/Array";
import _String from "./String/_String";
import _Funtion from './Function/_Funtion';
import _Events from './Events/_Events';
import _Loop from './Loop/_Loop';
import Objects from "./Objects/Objects";
import _HTML_DOM from './HTM_DOM/_HTML_DOM';
import _ES6 from './ES6/_ES6';
import BasicTopics from "./BasicTopics/_BasicTopics";
import APIs from "./API/APIs";

const JavasctiptNotes = () => {

    return ( 
            <div className="">
                <h2 className="text-2xl"></h2>
                <Blog
                topic={'JavasctiptNotes'}
                url={'https://www.geeksforgeeks.org/javascript/'}
                />
            <BasicTopics/>
            <_String/>
            <Array/>
            <Condition/>
            <_Funtion/>
            <_Events/>
            <_Loop/>
            <Objects/>
            <_HTML_DOM/>
            <_ES6/>
            <APIs/>
        </div>    
    );
};

export default JavasctiptNotes;