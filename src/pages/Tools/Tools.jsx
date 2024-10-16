// import { useContext, useEffect } from "react";
import {useEffect } from "react";
// import { ToolsForCode } from "../../CodeProvider";
import {Active}  from "../../shared/CommonJS";
import PageSetup from "./PageSetUp/PageSetup";
import GitGitHub from "./GitGitHub/GitGitHub";
import IndexPH from './indexPH/_IndexPH';
import KeyboardShort from "./KeyBoardShortcut/KeyboardShort";
import Assignments from "./indexPH/Assignments";
import Computer from "./Computer/Computer";
import VSCODE from "./VSCODE/VSCODE";

const Tools = () => {
    // const {curlyBraceOpen, curlyBraceClosed, greaterThan,
    //     lessThan} = useContext(ToolsForCode)
        useEffect(() =>{
            Active();
        })
    return (
        <>   
        <div>
          <PageSetup/>
           <IndexPH/>
           <GitGitHub/>
           <KeyboardShort/>
           <Assignments/>
           <Computer/>
           <VSCODE/>
        </div>    
        </>
    );
};

export default Tools;