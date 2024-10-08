import Blog from "../../../shared/Blog";
import Split from "./Split";
import StringIntro from "./StringIntro";
import TemplateString from "./TemplateString";


const _String = () => {

    return (
        <>

                    <StringIntro/>
                    <TemplateString/>
                    {/* String Methods */}
                    <Blog id={'String Methods'}/>
                    <Split/>


        </>
    );
};

export default _String;