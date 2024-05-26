import Blog from "../../../Shared/Blog";
const CustomHook = () => {
    return (
        <div>
            <Blog
            topic={'Custom hook'}
            url={'https://www.w3schools.com/react/react_customhooks.asp'}
            time={'64-3 6:00'}
            define={`Hooks are reusable functions.

            When you have component logic that needs to be used by multiple components, we can extract that logic to a custom Hook.`}
            code={
`
import { useEffect, useState } from "react";

const useMenu = () => {
const [menu, setMenu] = useState([]);
const [loading, setLoading] = useState(true);
useEffect(() => {
fetch('http://localhost:5000/menu')
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
        </div>
    );
};

export default CustomHook;