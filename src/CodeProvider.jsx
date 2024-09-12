import { createContext, useState } from "react";

export const ToolsForCode = createContext(null);
const CodeProvider = ({children}) => {
    console.log(typeof(children))
    const [every, setEvery]=useState(0)
    const curlyBraceOpen = '{'
    const dollerWithCurlyBraceOpen = '${'
    const curlyBraceClosed = '}'
    const greaterThan ='>'
    const lessThan ='<'
    const toolsInfo = {
        every,
        setEvery,
        curlyBraceOpen,
        dollerWithCurlyBraceOpen,
        curlyBraceClosed,
        greaterThan,
        lessThan
    }
    return (
        <ToolsForCode.Provider value={toolsInfo}>{children}</ToolsForCode.Provider>
    );
};

export default CodeProvider;