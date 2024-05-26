import useGetData from "../../../hooks/useGetData";
import CustomHook from "./CustomHook";

const Hooks = () => {
    const [getData] =useGetData('hooks.json');
    console.log(getData)
    return (
        <div>
            <CustomHook/>
        </div>
    );
};

export default Hooks;