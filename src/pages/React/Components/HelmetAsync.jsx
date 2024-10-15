import Blog from "../../../shared/Blog";

const HelmetAsync = () => {
    return (
<div className="to_jump" id="React Helmet Async">
        <div className="topic-border">
        <Blog 
            topic={'React Helmet Async'}
            npmCode={'npm i react-helmet-async'}
        />
            
        <Blog 
    heading={'main.jsx'}
    code={`import {HelmetProvider } from 'react-helmet-async';

    ReactDOM.createRoot(document.getElementById('root')).render(
    <React.StrictMode>
        <div className='max-w-screen-xl mx-auto'>
        <HelmetProvider>
        <RouterProvider router={router} />
        </HelmetProvider>
        </div>
    </React.StrictMode>,
    )`}/>
    
    <Blog
        fileName={'menu.jsx'}
        code={`
            <Helmet> 
                <title>Menu</title> 
            </Helmet>`}
    />
        </div>
</div>
    );
};

export default HelmetAsync;