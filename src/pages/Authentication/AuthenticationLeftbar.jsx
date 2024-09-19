import { useEffect } from "react";
import {Active, handleToggleDesplay } from "../../shared/CommonJS";


const AuthenticationLeftbar = () => {
    const getdata = [  
        {
            title:"Firebase Authentication",
            topic:["firebase.config","AuthProvider", "SignUp Page"] 
        },
        {
            title:"JWT Token",
            topic:["JSON Web Token (JWT)", "Cookie", 'Axios Interceptors'] 
        },
        {
            topic:['password strength regax javascript']
        }
    
    ]
    useEffect(() =>{
        Active();
    })
    return (
        
        <>
            {
                getdata.map(data=><div key={data.title}>
                    <div className="sidebarHeading">{data.title}</div>
                    {
                        data.topic.map(topic=><a key={topic} href={`#${topic}`} className="link">{topic}</a>)
                    }
                </div>)
            }

        </>
    );
};

export default AuthenticationLeftbar;