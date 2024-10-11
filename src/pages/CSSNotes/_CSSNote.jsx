import {useEffect } from "react";
import {Active} from "../../shared/CommonJS"
import Blog from "../../shared/Blog";
import Selector from "./Basic/Selector";
import Icons from "./Basic/Icons";
import Font from "./Basic/Font";

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
            <Font/>
            </div>  
        </div>  
    );
};

export default CSSNotes;