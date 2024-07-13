import { useContext, useEffect } from "react";
import BackendLeftbar from "./BackendLeftbar";
import { ToolsForCode } from "../../CodeProvider";
import  {Active, Accordion } from "../../components/CommonJS/CommonJS";
import Server from "./Server/Server";

// import HelmetAsync from "./Components/HelmetAsync";

const Backend = () => {
    useEffect(() =>{
        Active();
        Accordion();
    })
    const {curlyBraceOpen, curlyBraceClosed, greaterThan,
        lessThan} = useContext(ToolsForCode)
    return (
        <>
        <div className="leftBar">
            <BackendLeftbar/>
        </div>    
        <div className="content">
            <Server/>
        </div>    
        </>
    );
};

export default Backend;