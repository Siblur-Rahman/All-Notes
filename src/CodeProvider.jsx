import { createContext } from "react";

export const ToolsForCode = createContext(null);
const CodeProvider = ({children}) => {
    const curlyBraceOpen = '{'
    const curlyBraceClosed = '}'
    const greaterThan ='>'
    const lessThan ='<'
    const toolsInfo = {
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