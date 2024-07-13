import Blog from '../../Shared/Blog';
import NextJSLeftbar from './NextJSLeftbar';
import NextJSTopics from './NextJSTopics/NextJSTopics';

const NextJSNotes = () => {
    return (
        <>
        <div className="leftBar">
            <NextJSLeftbar/>
        </div>    
        <div className="content">
            <Blog
            topic={'Project Setup'}
            />
            <NextJSTopics/>
            {/* <Athintication/>
           <Components/>
           <Hooks/>
           <ReactAPI/> */}
        </div>    
        </>
    );
};

export default NextJSNotes;