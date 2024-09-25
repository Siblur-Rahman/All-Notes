import { useEffect } from "react";
import {Active, handleToggleDesplay } from "../../shared/CommonJS";


const JavasctiptNotesLeftbar = () => {
    const getdata = [
        {
            topic:"JS String",
            subTopic:[
                {
                    // title:'String',
                    topics:['JS String']
                },
                {
                    title:'String Methods',
                    topics:["String Split", "Method", ]
                }
            ]
        },
        {
            topic:"Array",
            subTopic:[
                {
                    topics:['Array']
                },
                {
                    title:'Array Methods',
                    topics:['Array Map', 'Array Reduce']
                }
            ]
        },
        {
            topic:"JS Condition",
            subTopic:[
                {
                    // title:'Array Methods',
                    topics:['JS Condition','Nested Condition']
                }
            ]
        },
        {
            topic:"JS Function",
            subTopic:[
                {
                    // title:'Array Methods',
                    topics:['Higher-Order Funcion','']
                }
            ]
        }
    ]
    useEffect(() =>{
        Active();
    })
    return (
        
        <>

            {
                getdata.map(data=><div key={data.topic}>
                    <button onClick={handleToggleDesplay}  className="text-red-500 w-full text-left">
                            {data.topic}
                    </button>
                   <div className="hidden">
                        {
                                data.subTopic.map(topic=>
                                
                                <div className="">
                                    {topic?.title && <button onClick={handleToggleDesplay} className="text-red-500 w-full text-left">{topic?.title}</button>}
                                    <div className={`${topic.title && 'hidden'}`}>
                                        {
                                            topic?.topics?.map(topic =><a key={topic} href={`#${topic}`} className="link">{topic}</a>)
                                        }
                                    </div>
                                </div>
                                )
                            }
                   </div>
                </div>)
            }

        </>
    );
};

export default JavasctiptNotesLeftbar;