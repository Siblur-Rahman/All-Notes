import { useEffect } from "react";
import {Active, Accordion } from "../../components/CommonJS/CommonJS"
import useGetData from './../../hooks/useGetData';

const ToolsLeftbar = () => {
    const [getdata]=useGetData('toolsLeftbar.json');
    useEffect(() =>{
        Active();
        Accordion()
    })
    return (
        
        <>
            {
                getdata.map(data=><div key={data.title}>
                    <div className="sidebarHeading flex-col">{data.title}</div>
                    <ul className="flex-col px-2">
                    {
                        data.topic.map(topic=><li key={topic}><a  href={`#${topic}`} className="link">{topic}</a></li>)
                    }
                    </ul>
                </div>)
            }

        </>
    );
};

export default ToolsLeftbar;