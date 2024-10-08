// import useGetData from "../../../hooks/useGetData";
import Blog from "../../../shared/Blog";
import CustomHook from "./CustomHook";
import HookUseEffect from "./HookUseEffect";
import HookUseSatate from "./HookUseSatate";

const Hooks = () => {

    return (
        <div>
            <div className="React Hook intro">
                <Blog
                 topic={'React Hooks'}
                 h2={'What is a Hook?'}
                 define={'Hooks allow us to "hook" into React features such as state and lifecycle methods.'}
                />

            </div>
            <HookUseSatate/>
            <HookUseEffect/>
            <CustomHook/>
        </div>
    );
};

export default Hooks;