import Blog from "../../../shared/Blog";

const Events = () => {
    return (
        <div className="React Events topic-border">
            <Blog 
            topic={'39-2 Different way to handle events in React'}
            url={'https://web.programming-hero.com/web-9/video/web-9-39-2-different-way-to-handle-events-in-react'}
            />
            <Blog
                topic={'React Events'}
                url={'https://www.w3schools.com/react/react_events.asp'}
                define={
                    <>
                    <span className="text-yellow-500"></span> 
                    Just like HTML DOM events, React can perform actions based on user events.
                     <br />
                    React has the same events as HTML: click, change, mouseover etc.
                     
                    <br /><br />
                    
                    </>
                }
            />
            <Blog
                topic={'Adding Events'}
                define={
                    <>
                    <span className="text-yellow-500"></span> 
                    React events are written in camelCase syntax:
                    <br /><br />
                    onClick instead of onclick.
                    <br /><br />
                    React event handlers are written inside curly braces:
                    <br /><br />
                    <span className="text-yellow-500"> onClick={'{'}shoot{'}'}</span>  instead of <span className="text-yellow-500"> onclick="shoot()"</span> .
                     
                    <br /><br />
                    
                    </>
                }
            />
            <Blog
                heading={'React'}
                code={`
                    <button onClick={shoot}>Take the Shot!</button>
                    `}
            />
            <Blog
                heading={'HTML'}
                code={`
<button onclick={shoot}>Take the Shot!</button>
                    `}
            />
        </div>
    );
};

export default Events;