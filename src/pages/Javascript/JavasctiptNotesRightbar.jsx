import { useEffect } from "react";
import {Active } from "../../shared/CommonJS";
import ArrayRightbar from "./Array/ArrayRightbar/ArrayRightbar";
import StringRightbar from "./String/StrinkRightbar";


const JavasctiptNotesRightbar = () => {
    return (
        
        <>
        <div className="sidebarHeading">Js Topics</div>
            <ArrayRightbar/>
            <StringRightbar/>
        </>
    );
};

export default JavasctiptNotesRightbar;