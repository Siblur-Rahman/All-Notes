import { useEffect } from "react";
import {Active, handleToggleDesplay } from "../../shared/CommonJS";
import { Link } from "react-scroll";
// import useGetData from './../../../hooks/useGetData';


const ReactLeftbar = () => {
    // const [getdata]=useGetData('reactLeftbar.json');
    const getdata = [
        {
            topic:"",
            subTopic:[
                {
                    topics:["React Project SetUp"]
                },
            ]
        },
        {
            topic:"ReactJS",
            subTopic:[
                {
                    topics:["React Props", 'React Events', 'React ',]
                },
            ]
        },

        {
            topic:"Route",
            subTopic:[
                {
                    topics:["React Router","Private","useNavitate","Navigate"]
                }
            ]
        },
        {
            topic:"React Conponents",
            subTopic:[
                {
                    topics:["React Helmet Async","React Parallax","Captcha","Icons","Date Picker","Sweetalert", "Form", "Payment", "Recharts", "React Link"]
                },
                // {
                //     title:'Fils',
                //     topics:["file-1", "file-2", ]
                // }
            ]
        },
        {
            topic:"React Hooks",
            subTopic:[
                {
                    topics:["React Hook intro","useState", "useEffect","useEffect Example", "Custom hook"]
                },
                // {
                //     title:'Fils',
                //     topics:["file-1", "file-2", ]
                // }
            ]
        },
        {
            topic:"React API",
            subTopic:[
                {
                    topics:["TanStack/Reack-Query","Axios","Axios Instance"]
                },
                // {
                //     title:'Fils',
                //     topics:["file-1", "file-2", ]
                // }
            ]
        },
        // {
        //     title:"",
        //     topic:["React Project SetUp"]
    
        // },
        // {
        //     title:"Route",
        //     topic:["React Router","Private","useNavitate","Navigate"]
    
        // },
        // {
        //     title:"React Notes",
        //     topic:["React Props"]
            
        // },   
        // {
        //     title:"Athintication",
        //     topic:["firebase.config","AuthProvider", "SignUp Page", "JSON Web Token (JWT)", "Cookie"]
        
        // },   
        // {
        //     title:"Components",
        //     topic:["React Helmet Async","React Parallax","Captcha","Icons","Date Picker","Sweetalert", "Form", "Payment"]
    
        // },
        // {
        //     title:"React Hooks",
        //     topic:["Custom hook","useState", "useEffect"]
        // },
        // {
        //     title:"React API",
        //     topic:["TanStack/Reack-Query","Axios","Axios Instance"]
        // }
    
    ]
    useEffect(() =>{
        Active();
    })
    return (
        <>

            {
                getdata.map(data=><div key={data.topic}>
                    {/* <button onClick={handleToggleDesplay}  className="sidebarHeading w-full text-left"> */}
                    <button onClick={handleToggleDesplay}  className="text-red-500 w-full text-left">

                            {data.topic}
                    </button>
                   <div className="hidden">
                        {
                                data.subTopic.map(topic=>
                                
                                <>
                                    {topic?.title && <button onClick={handleToggleDesplay} className="sidebarHeading flex-col">{topic?.title}</button>}
                                    <div className={`${topic.title && 'hidden'}`}>
                                        {
                                            topic?.topics?.map(topic =><Link activeClass="active p-0" to={`${topic}`} spy={true} smooth={true} offset={-100} duration={100} key={topic}  className="link">{topic}</Link>)
                                            // topic?.topics?.map(topic =><a key={topic} href={`#${topic}`} className="link">{topic}</a>)
                                        }
                                    </div>
                                </>
                                )
                            }
                   </div>
                </div>)
            }

        </>
        
        // <>
        //     {
        //         getdata.map(data=><div key={data.title}>
        //             <div className="sidebarHeading">{data.title}</div>
        //             {
        //                 data.topic.map(topic=><a key={topic} href={`#${topic}`} className="link">{topic}</a>)
        //             }
        //         </div>)
        //     }

        // </>
    );
};

export default ReactLeftbar;