import { useEffect } from "react";
import useGetData from "../../hooks/useGetData";
import {Active } from "../../components/CommonJS/CommonJS";


const PHeroLeftbar = () => {
    const [getdata]=useGetData('PHeroLeftbar.json');
    useEffect(() =>{
        Active();
    })
    return (
        
        <>

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

export default PHeroLeftbar;