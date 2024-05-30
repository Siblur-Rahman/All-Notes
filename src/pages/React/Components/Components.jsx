import HelmetAsync from "./HelmetAsync";
import ParallaxReact from './ParallaxReact';
import CaptchaReact from "./CaptchaReact";
import Form from "./Form";
import Icon from "./Icon";

const Components = () => {
    return (
        <div className="to_jump" id="component">
            <a href="https://github.com/brillout/awesome-react-components" target="_blank">brillout/awesome-react-components</a>
            <p>Carosel 64-3</p> 
            <HelmetAsync/>
            <ParallaxReact/>
            <CaptchaReact/>
            <Form/>
            <Icon/>
        </div>
    );
};

export default Components;