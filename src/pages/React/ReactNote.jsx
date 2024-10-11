import {useEffect } from "react";
// import  {Active} from "../../components/CommonJS/CommonJS";
import {Active} from "../../shared/CommonJS"
import Components from "./Components/Components";
import Hooks from "./reactHooks/Hooks";
// import PropsReact from "./totics/Props";
import ReactAPI from "./ReactAPI/ReactAPI";
import Route from "./Route/Route";
import Blog from "../../shared/Blog";
import Topics from "./totics/_Topics";
import HowTo from "./HowTo/_HowTo";
// import HelmetAsync from "./Components/HelmetAsync";

const ReactNote = () => {
    useEffect(() =>{
        Active();
    })

    return (
        <>  
        <div>
            <HowTo/>
            <div className="React Project SetUp">
            <Blog
            id={'React Project SetUp'}
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

            <Topics/>
            <Route/>
           <Components/>
           <Hooks/>
           <ReactAPI/>
           {/* <ReactHelmetAsync/> */}
        </div>    
        </>
    );
};

export default ReactNote;