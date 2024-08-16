import { useEffect } from "react";
import useGetData from "../../hooks/useGetData";
import { Accordion, Active } from "../../components/CommonJS/CommonJS";


const ReactLeftbar = () => {
    const [getdata]=useGetData('reactLeftbar.json');
    useEffect(() =>{
        Active();
        Accordion();
    })
    return (
        
        <>
        {/* Accordion */}
        <div className="accordion">Accordion</div>
        <div className="panel">
            Accordion Panel
        </div>

            {
                getdata.map(data=><div key={data.title}>
                    <div className="heading">{data.title}</div>
                    {
                        data.topic.map(topic=><a key={topic} href={`#${topic}`} className="link">{topic}</a>)
                    }
                </div>)
            }

        </>
    );
};

export default ReactLeftbar;