const items =["Hooks are reusable functions.","When you have component logic that needs to be used by multiple components, we can extract that logic to a custom Hook."]

// const items ={
//     multiple:["Hooks are reusable functions.","When you have component logic that needs to be used by multiple components, we can extract that logic to a custom Hook."]
// }
import Blog from "../../../Shared/Blog";
const CustomHook = () => {
    return (
        <div>
            <Blog
            topic={'Custom hook'}
            url={'https://www.w3schools.com/react/react_customhooks.asp'}
            time={'64-3 6:00'}
            defineWithIndex={items}
            // defineWithIndex={["Hooks are reusable functions.","When you have component logic that needs to be used by multiple components, we can extract that logic to a custom Hook."]}
            code={
`
import { useEffect, useState } from "react";

const useMenu = () => {
const [menu, setMenu] = useState([]);
const [loading, setLoading] = useState(true);
useEffect(() => {
fetch('url')
    .then(res => res.json())
    .then(data => {
        setMenu(data);
        setLoading(false);
    });
}, [])
return [menu, loading]
}

export default useMenu;
`
            }></Blog>
            <div className="accordion">Accordion</div>
            <div className="panel">panel</div>
        </div>
    );
};

export default CustomHook;