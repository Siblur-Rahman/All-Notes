import HelmetAsync from "./HelmetAsync";
import ParallaxReact from './ParallaxReact';
import Recaptcha from "./Recaptcha";

const Components = () => {
    return (
        <div className="to_jump" id="component">
            <a href="https://github.com/brillout/awesome-react-components" target="_blank">brillout/awesome-react-components</a>
            <p>Carosel 64-3</p> 
            <HelmetAsync/>
            <ParallaxReact/>
            <Recaptcha/>
        </div>
    );
};

export default Components;