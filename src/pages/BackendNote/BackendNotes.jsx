import {useEffect } from "react";
import { Active } from "../../shared/CommonJS";
import Blog from "../../shared/Blog";
import Server from "./Server/Server";


const BackendNotes = () => {
    useEffect(() =>{
        Active();
    })

    return ( 
            <div className="code topic-border">
            <Blog
            />
            <Server/>
        </div>    
    );
};

export default BackendNotes;