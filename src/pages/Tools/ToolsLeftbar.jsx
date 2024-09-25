import { useEffect } from "react";
import {Active, handleToggleDesplay} from "../../shared/CommonJS"
// import useGetData from './../../../hooks/useGetData';

const ToolsLeftbar = () => {
    // const [getdata]=useGetData('toolsLeftbar.json');
    const getdata=[
        {
            title:"For Creating Folder&File",
            topic:["some components","DisplaySymbol","Display Codes","Page setUp","Theme","Images", "Index"]
        },
        {
            title:"Index of PH",
            topic:["CSM-11 1st","CSM-11 Last","MS-12","Theme","Images", "Index", "Assignments"]
        },
        {
            title:"Git-GitHub",
            topic:["notice","Git Configure", "Creating, Removing and so on file and folder", "Git Commit Log", "Git Branch", "Push", "origin url change"]
        },
        {
            title:"Keyboard Shortcut",
            topic:["Common Keyboard","VS Code"]
        },
        {
            title:"Computer",
            topic:["Hard Disk Information",""]
        }
    
    ];
    useEffect(() =>{
        Active();
    })
    return (
        
        <div className="mt-5">
            {
                getdata.map(data=><div key={data.title}>
                    <button className="sidebarHeading flex-col" onClick={handleToggleDesplay}>{data.title}</button>
                    <ul className="flex-col px-2 hidden">
                    {
                        data?.topic?.map(topic=><li key={topic}><a  href={`#${topic}`} className="link">{topic}</a></li>)
                    }
                    </ul>
                </div>)
            }

        </div>
    );
};

export default ToolsLeftbar;