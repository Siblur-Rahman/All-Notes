import { useContext, useEffect } from "react";
import { ToolsForCode } from "../../CodeProvider";
import {Active}  from "../../components/CommonJS/CommonJS";
import ToolsLeftbar from "./ToolsLeftbar";
import PageSetup from "./PageSetup";
import Images from "./Images"
import Theme from "./Theme";
import GitGitHub from "./GitGitHub/GitGitHub";
import IndexPH from './indexPH/IndexPH';
import KeyboardShort from "./KeyBoardShortcut/KeyboardShort";
import DisplaySymbol from "./DisplaySymbol";
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
            <DisplaySymbol/>
           <PageSetup/>
           <Theme/>
           <Images/>
           <IndexPH/>
           <GitGitHub/>
           <KeyboardShort/>
        </div>    
        </>
    );
};

export default Tools;