import Deploy from "./Deploy";
import FakeData from "./FakeData";
import Image from "./Image";
import StaeManagement from "./StaeManagement";
import ThemSetup from "./ThemSetup";

const HowTo = () => {
    return (
        <div>
            <FakeData/>
            <Image/>
            <StaeManagement/>
            <ThemSetup/>
            <Deploy/>
        </div>
    );
};

export default HowTo;