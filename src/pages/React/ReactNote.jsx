import { useContext, useEffect } from "react";
import ReactLeftbar from "./ReactLeftbar";
import { ToolsForCode } from "../../CodeProvider";
import  {Active} from "../../components/CommonJS/CommonJS";
import Components from "./Components/Components";
import Hooks from "./reactHooks/Hooks";
// import PropsReact from "./totics/Props";
import Topics from "./totics/Topics";
import ReactAPI from "./ReactAPI/ReactAPI";
import Athintication from "./Athintication/Athintication";
import Route from "./Route/Route";
import Blog from "../../Shared/Blog";
// import HelmetAsync from "./Components/HelmetAsync";

const ReactNote = () => {
    useEffect(() =>{
        Active();
    })
    const {curlyBraceOpen, curlyBraceClosed, greaterThan,
        lessThan} = useContext(ToolsForCode)

    return (
        <>
        <div className="leftBar">
            <ReactLeftbar/>
        </div>    
        <div className="content">
            <Blog
            topic={'React Project SetUp'}
            code={`
npm create vite@latest my-project -- --template react
cd my-project
cd my-project
npm install
npm run dev
`}
            />
               <div className="code">
               <Blog
                heading={'React Setup with tailwindcss'}
                code={`
npm install -D tailwindcss postcss autoprefixer
npx tailwindcss init -p
                    `}
                />
                <Blog
                fileName={'tailwind.config.js'}
                code={`
content: ["./index.html","./src/**/*.{js,ts,jsx,tsx}",],
                    `}
                />
                <Blog
                fileName={'index.css'}
                code={`
@tailwind base;
@tailwind components;
@tailwind utilities;
                    `}
                />
                <Blog
                heading={'With DaigyUI'}
                npmCode={'npm i -D daisyui@latest'}
                />
                <Blog
                fileName={'tailwind.config.js'}
                code={`
module.exports = {
//...
plugins: [require("daisyui")],
                    `}
                />
               </div>

            <Route/>
            <Topics/>
            <Athintication/>
           <Components/>
           <Hooks/>
           <ReactAPI/>
           {/* <ReactHelmetAsync/> */}
        </div>    
        </>
    );
};

export default ReactNote;