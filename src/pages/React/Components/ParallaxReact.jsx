import Blog from "../../../Shared/Blog";

const ParallaxReact = () => {
    return (
        <div>

            <Blog
            topic={'React Parallax'}
            npmCode={'npm i react-parallax'}
            code={
                    `import { Parallax } from 'react-parallax';

                    const Container = () => (
                        <Parallax blur={10} bgImage="path/to/image.jpg" bgImageAlt="the cat" strength={200}>
                            Content goes here. Parallax height grows with content height.
                        </Parallax>
                    );`
            }/>
        </div>
    );
}
export default ParallaxReact;