import { useEffect } from "react";
import {Active, handleToggleDesplay } from "../../shared/CommonJS";
import { Link } from "react-scroll";


const JavasctiptNotesLeftbar = () => {
    const getdata = [
// JS Basic
        {
            topic:"JS Basic",
            subTopic:[
                {
                    // title:'JS Data Type',
                    topics:['Data Types']
                },
                // {
                //     title:'',
                //     topics:[]
                // }
            ]
        },
// JS String
        {
            topic:"JS String",
            subTopic:[
                {
                    // title:'String',
                    topics:['JS String','Template String']
                },
                {
                    title:'String Methods',
                    topics:["String Split", "Method", ]
                }
            ]
        },
//  Array
        {
            topic:"Array",
            subTopic:[
                {
                    topics:['Array']
                },
                {
                    // title:'Array Methods',
                    topics:['Array Map', 'Array Reduce', 'For Each', 'Filter', 'Find']
                }
            ]
        },
// JS Condition     
        {
            topic:"JS Condition",
            subTopic:[
                {
                    // title:'Array Methods',
                    topics:['JS Condition','Nested Condition']
                }
            ]
        },
// JS Function
        {
            topic:"JS Function",
            subTopic:[
                {
                    // title:'Array Methods',
                    topics:['Declared Function','Anonymous Functions','Arrow Function','Higher-Order Funcion','Call/Invok','Notice To Function']
                }
            ]
        },
// JS Events
        {
            topic:"JS Events",
            subTopic:[
                {
                    // title:'',
                    topics:['Events', 'onclick']
                }
            ]
        },
// JS Loop
        {
            topic:"JS Loop",
            subTopic:[
                {
                    // title:'',
                    topics:['js Loop','For loop', 'For in', 'For while', 'Do while']
                }
            ]
        },
// JS Objects
        {
            topic:"JS Objects",
            subTopic:[
                {
                    // title:'',
                    topics:['JS Objects']
                }
            ]
        },
        {
            topic:"JS ES6",
            subTopic:[
                {
                    // title:'',
                    topics:['Spreed Operator']
                }
            ]
        },
        {
            topic:"JS Web APIs",
            subTopic:[
                {
                    title:'Fetch API',
                    topics:['Fetch Intro', "with 'then...catch' Block", "Response Asynchronously", "Options with Fetch() API"]
                }
            ]
        },
        {
            topic:"JS JSON",
            subTopic:[
                {
                    // title:'',
                    topics:['Web API Intro']
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
                    <button onClick={handleToggleDesplay}  className="text-red-500 w-full text-left">
                            {data.topic}
                    </button>
                   <div className="hidden pl-2">
                        {
                                data.subTopic.map(topic=>
                                
                                <div className="">
                                    {topic?.title && <button onClick={handleToggleDesplay} className="text-yellow-500 w-full text-left">{topic?.title}</button>}
                                    <div className={`${topic.title && 'hidden'}`}>
                                        {
                                            // topic?.topics?.map(topic =><a key={topic} href={`#${topic}`} className="link">{topic}</a>)
                                            topic?.topics?.map(topic =><Link activeClass="active p-0" to={`${topic}`} spy={true} smooth={true} offset={-100} duration={100} key={topic}  className="link">{topic}</Link>)
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