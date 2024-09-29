import Blog from "../../../shared/Blog";
import Onclick from "./Onclick";

const _Events = () => {
    return (   
        <>
            <div className="Events">
                <Blog
                    topic={'JS Events'}
                    url={'https://www.geeksforgeeks.org/html-dom-onclick-event/'}
                />
                <Onclick/>
            </div>
        </>
    );
};

export default _Events;