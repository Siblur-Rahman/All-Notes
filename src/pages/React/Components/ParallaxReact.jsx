import Blog from "../../../shared/Blog";

const ParallaxReact = () => {
    return (
        <div id="React Parallax" className="to_jump">
            <div className="topic-border">
            <Blog
            topic={'React Parallax'}
            time={'64-7/8 :00 & 54-2 9:17'}
            npmCode={'npm i react-parallax'}
            code={
`import { Parallax } from 'react-parallax';

const Container = () => (
    <Parallax blur={10} 
    bgImage="path/to/image.jpg" 
    bgImageAlt="the cat" 
    strength={200}>
    Content goes here.
    </Parallax>
);`
            }/>
        </div>
    </div>
    );
}
export default ParallaxReact;