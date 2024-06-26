import { useContext, useEffect } from "react";
import JSLeftBar from "./JSLeftBar";
import { ToolsForCode } from "../../CodeProvider";
import ArrowFunction from "./function/ArrowFunction";
import {Active } from "../../components/CommonJS/CommonJS";



const JavaScript = () => {
    const {curlyBraceOpen, curlyBraceClosed, greaterThan,
        lessThan} = useContext(ToolsForCode)
        useEffect(() =>{
            Active();
        },[])
    return (
        <>
        <div className="leftBar">
            <JSLeftBar/>
        </div>    
        <div className="content">
           <ArrowFunction/>
        </div>    
        </>
    );
};

export default JavaScript;