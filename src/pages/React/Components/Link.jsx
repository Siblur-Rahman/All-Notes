import Blog from "../../../shared/Blog";

const Link = () => {
    return (
        <div className="to_jump" id="React Link">
            <div className="topic-border">
                <Blog
                    topic={'React Link'}
                    // url={''}
                />
                <Blog
                    topic={'React scroll'}
                    url={'https://www.npmjs.com/package/react-scroll'}
                    npmCode={'npm i react-scroll'}
                />
            </div>
            
        </div>
    );
};

export default Link;