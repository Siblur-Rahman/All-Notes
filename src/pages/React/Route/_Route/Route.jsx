import DynamicRouteLink from "../Component/DynamicRouteLink";
import Navigate from "../Component/Navigate";
import ReactRouter from "../Component/ReactRouter";
import UseLoaderData from "../Hooks/UseLoaderData";
import UseNavigate from "../Hooks/UseNavigate";

const Route = () => {
    return (
        <div>
            <ReactRouter/>
            {/* Component */}
            <DynamicRouteLink/>
            <Navigate/>

            {/* Hooks */}
            <UseNavigate/>
            <UseLoaderData/>
        </div>
    );
};

export default Route;