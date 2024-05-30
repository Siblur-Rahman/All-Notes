import { useContext, useEffect } from "react";
import { ToolsForCode } from "../../CodeProvider";
import {Active}  from "../../components/CommonJS/CommonJS";
import ToolsLeftbar from "./ToolsLeftbar";
import PageSetup from "./PageSetup";
import Images from "./Images"
import Index from "./Index";
import Theme from "./Theme";
const Tools = () => {
    const {curlyBraceOpen, curlyBraceClosed, greaterThan,
        lessThan} = useContext(ToolsForCode)
        useEffect(() =>{
            Active();
        })
    return (
        <>
        <div className="leftBar">
            <ToolsLeftbar/>
        </div>    
        <div className="content">
           <PageSetup/>
           <Theme/>
           <Images/>
           <Index/>
        </div>    
        </>
    );
};

export default Tools;