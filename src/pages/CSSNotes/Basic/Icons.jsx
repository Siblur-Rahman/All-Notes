import Blog from "../../../shared/Blog";

const Icons = () => {
    return (
        <div className="to_jump Icons" id="">
            <div className="topic-border">
                <Blog
                    topic={'CSS Icons'}
                    url={'https://www.tutorialspoint.com/css/css_icons.htm'}
                    heading={'Font Awesome Icons'}
                    codes={[<span className="mark">My kit:</span>, `<script src="https://kit.fontawesome.com/09ff4c6b49.js" crossorigin="anonymous"></script>`]}
                />
            </div>
            
        </div>
    );
};

export default Icons;