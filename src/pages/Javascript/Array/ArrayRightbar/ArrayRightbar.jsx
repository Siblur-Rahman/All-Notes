import { handleToggleDesplay } from "../../../../shared/CommonJS";

const ArrayRightbar = () => {
    const topicsData =[
        {
            topic:'Aarray Intro',
            subTopics_path:["Array Intro", "Array Map", "Array Reduce", "Array ", "Array ",]
        }, 
        {
            topic:'Aarray Metheds',
            subTopics_path:["Array Map", "Array Reduce", "Array ", "Array ",]
        }, 
    ]
    return (
        <>
        <button onClick={handleToggleDesplay} className="w-full btn">JS Array</button>
            <div className="sidebarHiddenDiv hidden">
                {
                    topicsData.map(data=><div key={data.topic}>
                        <div className="heading">{data.title}</div>
                        {
                            data?.subTopics_path?.map(topic=><a key={topic} href={`#${topic}`} className="link">{topic}</a>)
                        }
                    </div>)
                }
            </div>

        </>
    );
};

export default ArrayRightbar;