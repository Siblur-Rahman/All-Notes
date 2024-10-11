import { useEffect } from "react";
import Blog from "../../../shared/Blog";
import HookUseEffectExample from "./HookUseEffectExample";

const HookUseEffect = () => {
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
        <div>
            <div className="useEffect topic-border">
            <Blog
                topic={'39-5 (Advanced) Understand the concept of useEffect'}
                url={'https://web.programming-hero.com/web-9/video/web-9-39-5-advanced-understand-the-concept-of-useeffect'}
            />
            <Blog heading={' No dependency passed / Runs agter evrey render'}
                code={`
                    useEffect(() => {
                     //Runs on every render
                    });
                    `}
            />
            <Blog heading={'Runs only on the first render'}
                code={`
                 useEffect(() => {
                    //Runs only on the first / initial render
                    }, []);   
                    `}
            />
            <Blog heading={'Multiple dependenc'}
                code={`
                useEffect(() => {
                //Runs on the first render
                //And any time any dependency value changes
                }, [prop, state]);  
                    `}
            />
            <Blog
                topic_time={'React Core Concept 27:15 p-2'}
                topic={'useEffect'}
                define={'The useEffect Hook allows you to perform side effects in your components.'}
            />

            {/* Effect Cleanup */}
            <Blog
                heading={'Effect Cleanup'}
                define={<>
                    Some effects require cleanup to reduce memory leaks.
                        <br />
                    Timeouts, subscriptions, event listeners, and other effects that are no longer needed should be disposed.
                        <br />
                    We do this by including a return function at the end of the useEffect Hook.
                </>}
            />
            <Blog
                heading={'Example'}
                h2={<>Clean up the timer at the end of the <span className="text-yellow-500">useEffect</span> Hook:</>}
                code={`
        import { useState, useEffect } from "react";
        import ReactDOM from "react-dom/client";

        function Timer() {
        const [count, setCount] = useState(0);

        useEffect(() => {
            let timer = setTimeout(() => {
            setCount((count) => count + 1);
        }, 1000);

        return () => clearTimeout(timer)
        }, []);

        return <h1>I've rendered {count} times!</h1>;
        }
                        `}
                />
            </div>

            {/* Examples */}
            <HookUseEffectExample/>
        </div>
    );
};

export default HookUseEffect;