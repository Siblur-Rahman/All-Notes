import { useEffect } from "react";
import {Active, handleToggleDesplay } from "../../shared/CommonJS";
import { Link } from "react-scroll";


const CSSNotesLeftbar = () => {
    const getdata = [
        {
            topic:"Basic",
            subTopic:[
                {
                    topics:['selector', 'Icons', 'Font']
                },
                {
                    title:'Fils',
                    topics:["file-1", "file-2", ]
                }
            ]
        },
        {
            topic:"css-2",
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
        // Active();
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
                                            // topic?.topics?.map(topic =><a key={topic} href={`#${topic}`} className="link">{topic}</a>)
                                            topic?.topics?.map(topic =><Link activeClass="active" to={`${topic}`} spy={true} smooth={true} offset={-100} duration={500} key={topic}  className="link">{topic}</Link>)
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

export default CSSNotesLeftbar;