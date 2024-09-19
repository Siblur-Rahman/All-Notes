import {useEffect } from "react";
import {Active} from "../../shared/CommonJS"
import Blog from "../../shared/Blog";
import Condition from "./Condition/_Condition";

const HowTo = () => {
    useEffect(() =>{
        Active();
    })

    return ( 
            <div className="topic-border">
            <Blog
            id={'How To'}
            code={''}
            codes={['']}
            />
            <Condition/>

        </div>    
    );
};

export default HowTo;