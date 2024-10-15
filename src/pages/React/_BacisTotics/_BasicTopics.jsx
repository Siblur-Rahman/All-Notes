import Blog from "../../../shared/Blog";
import Components from "./Components";
import Events from "./Events";
import Props from "./Props";

const BasicTopics = () => {
    return (
        <div>
            <div className="React Intro">
                <Blog
                    topic={'React Intro'}
                    topicURL={'https://www.w3schools.com/REACT/react_intro.asp'}
                    defineBG_highlight={<>
                    React is a JavaScript library for building user interfaces.
                        <br />
                    React is used to build single-page applications.
                        <br />
                    React allows us to create reusable UI components.
                    </>}
                />
            </div>
            <Components/>
            <Props/>
            <Events/>
        </div>
    );
};

export default BasicTopics;