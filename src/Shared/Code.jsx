
const Code = ({topic, define, defineWithIndex, url, video, time, id, code}) => {
    return (
        <>
        {topic && <h2 className="heading to_jump" id={id}>{topic && topic}<span className="black">{time}</span>{url && <a href={url} target="_blank"> Detals</a>}</h2>}
        {define && <div>{define.map((value, index) => {<p>{define}</p>})}</div>}
        <pre className="code mt-5px">
            {code}
        </pre>
        {video && <video src={video} controls width="90%" height="500px"></video>}
        </>
    );
};

export default Code;