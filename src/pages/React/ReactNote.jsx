import { useContext, useEffect } from "react";
import ReactLeftbar from "./ReactLeftbar";
import Theme from "./Theme";
import { ToolsForCode } from "../../CodeProvider";
import  {Active, Accordion } from "../../components/CommonJS/CommonJS";
import Components from "./Components/Components";
import Hooks from "./reactHooks/Hooks";
// import PropsReact from "./totics/Props";
import Topics from "./totics/Topics";
import ReactAPI from "./ReactAPI/ReactAPI";
// import HelmetAsync from "./Components/HelmetAsync";

const ReactNote = () => {
    useEffect(() =>{
        Active();
        Accordion();
    })
    const {curlyBraceOpen, curlyBraceClosed, greaterThan,
        lessThan} = useContext(ToolsForCode)
    return (
        <>
        <div className="leftBar">
            <ReactLeftbar/>
        </div>    
        <div className="content">
            <Topics/>
           <Theme/>
           <Components/>
           <Hooks/>
           <ReactAPI/>
           {/* <ReactHelmetAsync/> */}
        </div>    
        </>
    );
};

export default ReactNote;