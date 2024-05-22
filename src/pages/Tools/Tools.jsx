import { useContext, useEffect } from "react";
import { ToolsForCode } from "../../CodeProvider";
import {Active, Accordion }  from "../../components/CommonJS/CommonJS";
import ToolsLeftbar from "./ToolsLeftbar";
import PageSetup from "./PageSetup";

const Tools = () => {
    const {curlyBraceOpen, curlyBraceClosed, greaterThan,
        lessThan} = useContext(ToolsForCode)
        useEffect(() =>{
            Active();
            Accordion();
        })
    return (
        <>
        <div className="leftBar">
            <ToolsLeftbar/>
        </div>    
        <div className="content">
           <PageSetup/>
        </div>    
        </>
    );
};

export default Tools;