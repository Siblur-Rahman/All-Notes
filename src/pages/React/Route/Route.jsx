import DynamicRouteLink from "./DynamicRouteLink";
import Navigate from "./Navigate";
import ReactRouter from "./ReactRouter";
import UseNavigate from "./UseNavigate";

const Route = () => {
    return (
        <div>
            <ReactRouter/>
            <DynamicRouteLink/>
            {/* useNavitate */}
            <UseNavigate/>
            {/* Navitate */}
            <Navigate/>
        </div>
    );
};

export default Route;