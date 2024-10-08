import FolderLeftbar from "./_folder/FolderNotesLeftbar";
import AuthenticationLeftbar from "./Authentication/AuthenticationLeftbar";
import BackendNodeLeftbar from "./BackendNote/BackendNodeLeftbar";
import CSSNotesLeftbar from "./CSSNotes/CSSNotesLeftbar";
import EnglishNotesNotesLeftbar from "./English/EnglishNotesNotesLeftbar";
import HowToLeftbar from "./HowTio/HowToLeftbar";
import JavasctiptNotesLeftbar from "./Javascript/JavasctiptNotesLeftbar";
import ReactLeftbar from "./React/ReactLeftbar";
import ToolsLeftbar from "./Tools/ToolsLeftbar";
import { Link } from 'react-router-dom';
import { useLocation } from 'react-router-dom';

const NotesLeftbar = () => {
  const {pathname} = useLocation();
    return (
        <div className="p-3">
            {pathname==='/javascript' && <JavasctiptNotesLeftbar/>}
            {pathname==='/react' && <ReactLeftbar/>}
            {pathname==='/css' && <CSSNotesLeftbar/>}
            {pathname==='/authentication' && <AuthenticationLeftbar/>}
            {pathname==='/backend' && <BackendNodeLeftbar/>}
            {pathname==='/tools' && <ToolsLeftbar/>}
            {pathname==='/english' && <EnglishNotesNotesLeftbar/>}
            {pathname==='/howto' && <HowToLeftbar/>}
            {pathname==='/folder' && <FolderLeftbar/>}
        </div>
    );
};

export default NotesLeftbar;