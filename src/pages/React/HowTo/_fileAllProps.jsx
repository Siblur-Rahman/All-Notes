import Blog from "../../../shared/Blog";
import Example from "../../../shared/Example";
import Syntax from "../../../shared/Syntax";

const _file = () => {
    return (
    <div>
        <div className='topic-border'>

        <Blog
            topic={''}
            topic_time={''}
            topic_timeURL={''}

            heading={''} 
            head_time={''} 
            head_timeURL={''}

            define={''} 
            defineBG_highlight={''} 
            defineWithIndex={[]}
            code={''} 
            markCode={''} 
            codes={''} 
            index={''} 
             video={''} 
             syntax={<Syntax/>}
               h2={''} 
               example={<Example/>}
        />
        </div>
    </div>
    );
};

export default _file;