import Blog from "../../../shared/Blog";
import FetchAPI from "./FetchAPI";

const APIs = () => {
    return (
        <div>
            <div className="Web API Intro">
                <Blog
                    topic={'Web API Intro'}
                    url={'https://www.tutorialspoint.com/javascript/javascript_web_api.htm'}
                    h2={'What is Web API?'}
                    define={<>               
                    The API is an acronym for <span className="text-highlight">the Application Programming Interface.</span> It is a standard protocol or set of rules to communicate between two software components or systems.
                        <br />
                    A web API is an <span className="text-highlight">application programming interface</span>  for web.
                    </>}
                />
                <Blog
                    h2={'There are different types of web APIs, some are as follow −'}
                    defineBG_highlight={<>
                            Browser API (Client-Side JavaScript API)
                                <br />br
                            Server API
                                <br />br
                            Third Party APIs
                    </>}
                />
                <FetchAPI/>
            </div>
        </div>
    );
};

export default APIs;