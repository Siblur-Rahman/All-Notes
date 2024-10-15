import Blog from "../../../../shared/Blog";

const ReactRouter = () => {
    return (
        <div className="React-Router">
            <Blog 
                topic={'React Router'} 
                topicURL={'https://reactrouter.com/en/main'}
                defineBG_highlight={'React Router is a JavaScript framework that lets us handle client and server-side routing in React applications.'}
            
            />
            <Blog
            topic={''}
            fileName={''}
            />
        </div>
    );
};

export default ReactRouter;