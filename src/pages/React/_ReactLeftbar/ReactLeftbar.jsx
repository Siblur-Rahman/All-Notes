import { useEffect } from "react";
import {Active, handleToggleDesplay } from "../../../shared/CommonJS";
import { Link } from "react-scroll";
// import useGetData from './../../../hooks/useGetData';


const ReactLeftbar = () => {
    // const [getdata]=useGetData('reactLeftbar.json');
    const getdata = [
       
        {
            topic:"Project SetUp",
            subTopic:[
                {
                    topics:["Project SetUp", 'tailwindcss', 'DaigyUI','eslint']
                },
            ]
        },
        {
            topic:"React Basic Topics",
            subTopic:[
                {
                    topics:["React Intro","Components","Props", 'PropType', 'Events', '',]
                },
            ]
        },

        {
            topic:"Route Router",
            subTopic:[
                {
                    // title:'',
                    topics:["React-Router",]
                },
                {
                    title:'Component',
                    topics:["Route-Link", "Private", "Navigate"]
                },
                {
                    title:'Hooks',
                    topics:["useNavitate",'useLoaderData']
                }
            ]
        },
        {
            topic:"React Conponents",
            subTopic:[
                {
                    topics:["awesome-components", "React Helmet Async","React Parallax","Captcha","Icons","Date Picker","Sweetalert", "Form", "Payment", "Recharts", "React Link"]
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
                    topics:["React Hook intro","useState", "useEffect","useEffect Example", "useRef", "Custom hook"]
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
        {
            topic:"How To",
            subTopic:[
                {
                    topics:["Fake Data Ctreate", 'Image Add', 'State Management','Theme Setup','Deploy']
                },
                {
                    title:'Data',
                    topics:["Fake Data Ctreate", 'To/From-localStorage']
                },
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
                                    {topic?.title && <button onClick={handleToggleDesplay} className="sidebarHeading w-full">{topic?.title}</button>}
                                    <div className={`${topic?.title && ''}`}>
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