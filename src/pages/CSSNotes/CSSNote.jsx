import {useEffect } from "react";
import {Active} from "../../shared/CommonJS"
import Blog from "../../shared/Blog";
import Selector from "./Basic/Selector";
import Icons from "./Basic/Icons";

const CSSNotes = () => {
    useEffect(() =>{
        Active();
    })

    return ( 
        <div className="to_jump" id="">
            <div className="topic-border">
               
            <Blog

            />
            <Selector/>
            <Icons/>
            
            </div>  
        </div>  
    );
};

export default CSSNotes;