import Blog from "../../../shared/Blog";
import AnonymousFunction from "./AnonymousFunction";
import ArrowFunction from "./ArrowFunction";
import CallInvokFunction from "./CallInvokFunction";
import DeclaredFunction from "./DeclaredFunction";
import HigherOrderFuncion from "./HigherOrderFuncion";
import NoticeToFunction from "./NoticeToFunction";

const _Funtion = () => {
    const a = () =>{
        console.log('Hellow World')
    }

    const b = a()
    console.log(b)
    return (
        <div className="">
            <DeclaredFunction/>
            <CallInvokFunction/>
            <AnonymousFunction/>
            <ArrowFunction/>
            <HigherOrderFuncion/>
            <NoticeToFunction/>
        </div>
    );
};

export default _Funtion;