import Blog from "../../../shared/Blog";

const Components = () => {
    return (
        <div className="Components topic-border">
            <Blog
                topic={'React Components'}
                topicURL={'https://www.w3schools.com/react/react_components.asp'}
                defineBG_highlight={<>
                Components are like functions that return HTML elements.
                    <br />
                Components are independent and reusable bits of code. They serve the same purpose as JavaScript functions, but work in isolation and return HTML.
                    <br />
                Components come in two types, <span className="text-highlight">Class components</span> and <span className="text-highlight">Function components</span>
                </>}
            />
            <Blog 
                heading={'Controlled and Uncontrolled Components'} 
                head_time={'46-3'} 
                head_timeURL={'https://web.programming-hero.com/web-9/video/web-9-46-3-explore-ref-and-controlled-and-uncontrolled-components'} 
                head_details={'https://www.freecodecamp.org/news/what-are-controlled-and-uncontrolled-components-in-react/'}
            />
            <Blog 
                heading={''} 
                head_time={''} 
                head_timeURL={''} 
                head_details={''}
            />
            <Blog 
                heading={''} 
                head_time={''} 
                head_timeURL={''} 
                head_details={''}
            />
            <Blog
                heading={'Example'}
                code={`
   
                    `}
            />
            <Blog
                heading={'Example'}
                code={`

                    `}
            />
            
        </div>
    );
};

export default Components;