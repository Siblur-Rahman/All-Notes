import { handleToggleDesplay } from "../../../shared/CommonJS";

const StringRightbar = () => {
    const topicsData =[
        {
            topic:'Strink Metheds',
            subTopics_path:["String Split", "String ", "String",]
        }, 
    ]
    return (
        <>
                <button onClick={handleToggleDesplay} className="w-full btn btn-outline text-2xl">String Methods</button>
                <div className="hidden">
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

export default StringRightbar;