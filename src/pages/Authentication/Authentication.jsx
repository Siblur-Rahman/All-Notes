import AxiosInterceptors from "./AxiosInterceptors";
import Cookie from "./Cookie";
import JWToken from "./JWToken";
import SignUp from "./SignUp";

const Authentication = () => {
    return (
        <div>
            <SignUp/>
            <JWToken/>
            <Cookie/>
            <AxiosInterceptors/>
        </div>
    );
};

export default Authentication;