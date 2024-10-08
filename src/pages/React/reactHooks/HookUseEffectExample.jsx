import { useEffect } from "react";
import Blog from "../../../shared/Blog";

const HookUseEffectExample = () => {
    const examples =[
        {
            title:"Runs only on the first render",
            code:`
            import { useEffect, useState } from "react";

const Apply = () => {
    const [users, setUsers] = useState([]);

    useEffect(() =>{
        fetch('https://jsonplaceholder.typicode.com/users')
        .then(res => res.json())
        .then(data => setUsers(data))
    }, [])
    return (
        <div>
            <h2>Users : {users.length}</h2>
        </div>
    );
};

export default Apply;

            `
        }
    ]

    useEffect(()=>{

    })
    return (
        <div className="useEffect Example topic-border">
            
        {
            examples.map((example, index) =><Blog
                heading={`Example-${index+1}`}
                h2={example.title}
                code={example.code}
            />)
        }
        </div>
    );
};

export default HookUseEffectExample;