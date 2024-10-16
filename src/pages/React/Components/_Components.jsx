import HelmetAsync from "./HelmetAsync";
import ParallaxReact from './ParallaxReact';
import CaptchaReact from "./CaptchaReact";
import Form from "./Form";
import Icon from "./Icon";
import DatePicker from "./DatePicker";
import SweetAlert from "./SweetAlert";
import Payment from "./Payment";
import Recharts from "./Recharts";
import Link from "./Link";
import AwesomeComponents from "./AwesomeComponents";
import Map from "./Map";
// import SweetAlert from "./SweetAlert";

const Components = () => {
    return (
        <div className="to_jump" id="component">
            <a href="https://github.com/brillout/awesome-react-components" target="_blank">brillout/awesome-react-components</a>
            <p>Carosel 64-3</p>
            <AwesomeComponents/> 
            <HelmetAsync/>
            <ParallaxReact/>
            <CaptchaReact/>
            <Form/>
            <Icon/>
            <DatePicker/>
            <SweetAlert/>
            <Payment/>
            <Recharts/>
            <Link/>
            <Map/>
        </div>
    );
};

export default Components;