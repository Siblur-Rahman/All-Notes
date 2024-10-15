import {useEffect } from "react";
// import  {Active} from "../../components/CommonJS/CommonJS";
import {Active} from "../../../shared/CommonJS"
import Components from "../Components/_Components";
import Hooks from "../reactHooks/Hooks";
// import PropsReact from "./totics/Props";
import ReactAPI from "../ReactAPI/ReactAPI";
import Blog from "../../../shared/Blog";
import HowTo from "../HowTo/_HowTo";
import BasicTopics from "../_BacisTotics/_BasicTopics";
import Route from "../Route/_Route/Route";
// import HelmetAsync from "./Components/HelmetAsync";

const ReactNote = () => {
    useEffect(() =>{
        Active();
    })

    return (
        <>  
        <div>
            <div className="Project SetUp">
            <Blog
            topic={'React Project SetUp'}
            code={[`
npm create vite@latest my-project -- --template react
cd my-project
cd my-project
npm install
npm run dev
`]}
            />
            </div>

            <div className="code with tailwindcss">
               <Blog
                heading={'React Setup with tailwindcss'}
                code={[`
npm install -D tailwindcss postcss autoprefixer
npx tailwindcss init -p
                    `]}
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
            </div>

            <div className="DaigyUI">
                <Blog
                heading={'React Setup With DaigyUI'}
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

            {/* <div className="eslint">
                <Blog
                    fileName={'.eslintrc.cjs'}
                    code={''}
                />
            </div> */}

            <BasicTopics/>
            <Route/>
           <Components/>
           <Hooks/>
           <ReactAPI/>
           <HowTo/>
           {/* <ReactHelmetAsync/> */}
        </div>    
        </>
    );
};

export default ReactNote;