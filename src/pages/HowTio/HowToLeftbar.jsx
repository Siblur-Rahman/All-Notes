import { useEffect } from "react";
import {Active, handleToggleDesplay } from "../../shared/CommonJS";


const HowToLeftbar = () => {
    const getdata = [
        {
            topic:"Condition",
            subTopic:[
                {
                    topics:['DisplayElement']
                },
                // {
                //     title:'Fils',
                //     topics:["file-1", "file-2", ]
                // }
            ]
        },
        {
            topic:"Folder-2",
            subTopic:[
                {
                    topics:['Single topic']
                },
                {
                    title:'Fils',
                    topics:["file-1", "file-2", ]
                }
            ]
        },
    ]
    useEffect(() =>{
        Active();
    })
    return (
        
        <>

            {
                getdata.map(data=><div key={data.topic}>
                    <button onClick={handleToggleDesplay}  className="heading w-full">
                            {data.topic}
                    </button>
                   <div className="hidden">
                        {
                                data.subTopic.map(topic=>
                                
                                <>
                                    {topic?.title && <div onClick={handleToggleDesplay} className="w-full btn">{topic?.title}</div>}
                                    <div className={`${topic.title && 'hidden'}`}>
                                        {
                                            topic?.topics?.map(topic =><a key={topic} href={`#${topic}`} className="link">{topic}</a>)
                                        }
                                    </div>
                                </>
                                )
                            }
                   </div>
                </div>)
            }

        </>
    );
};

export default HowToLeftbar;