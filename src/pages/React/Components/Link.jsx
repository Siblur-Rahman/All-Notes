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
                    fileName={'file.jsx'}
                    codes={[
`<Link activeClass="active" to="aboutSection" spy={true} smooth={true} offset={-100} duration={500} className="list">About</Link>`,
`<div className='aboutSection'>
            content
</div>`
                    ]}
                />
            </div>
            
        </div>
    );
};

export default Link;