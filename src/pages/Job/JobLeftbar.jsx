import { useEffect } from "react";
import useGetData from "../../hooks/useGetData";
import {Active } from "../../components/CommonJS/CommonJS";


const JobLeftbar = () => {
    const [getdata]=useGetData('jobLeftbar.json');
    useEffect(() =>{
        Active();
    })
    return (
        
        <>

            {
                getdata.map(data=><div key={data.page_title}>
                    <div className="heading">{data.page_title}</div>
                    {
                        data.topic.map(topic=><a key={topic} href={`#${topic}`} className="link">{topic}</a>)
                    }
                </div>)
            }

        </>
    );
};

export default JobLeftbar;