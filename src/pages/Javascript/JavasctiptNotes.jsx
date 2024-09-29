
import Blog from "../../shared/Blog";
import Condition from "./Condition/Condition";
import Array from "./Array/Array/Array";
import String from "./String/String";
import _Funtion from './Function/_Funtion';
import _Events from './Events/_Events';
import _Loop from './Loop/_Loop';
import Objects from "./Objects/Objects";

const JavasctiptNotes = () => {

    return ( 
            <div className="">
                <h2 className="text-2xl"></h2>
                <Blog
                topic={'JavasctiptNotes'}
                url={'https://www.geeksforgeeks.org/javascript/'}
                />
            <String/>
            <Array/>
            <Condition/>
            <_Funtion/>
            <_Events/>
            <_Loop/>
            <Objects/>
        </div>    
    );
};

export default JavasctiptNotes;