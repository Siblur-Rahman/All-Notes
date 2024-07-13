import { createContext, useState } from "react";

export const ToolsForCode = createContext(null);
const CodeProvider = ({children}) => {
    const [every, setEvery]=useState(0)
    const curlyBraceOpen = '{'
    const curlyBraceClosed = '}'
    const greaterThan ='>'
    const lessThan ='<'
    const toolsInfo = {
        every,
        setEvery,
        curlyBraceOpen,
        curlyBraceClosed,
        greaterThan,
        lessThan
    }
    return (
        <ToolsForCode.Provider value={toolsInfo}>{children}</ToolsForCode.Provider>
    );
};

export default CodeProvider;