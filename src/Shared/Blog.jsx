
const Blog = ({topic, npmCode, heading, define, url, video, time, code}) => {
    return (
        <>
        {topic && <h2 className="to_jump my-10px" id={topic}>{topic && topic}<span className="blue"> {time}
        </span>{url && <a href={url} target="_blank"> Detals</a>}</h2>}
        {npmCode && <div className="npmCode">{npmCode}</div>}
        {define && <p>{define}</p>}
        <pre className="code mt-5px">
            {code}
        </pre>
        {video && <video src={video} controls width="90%" height="500px"></video>}
        </>
    );
};

export default Blog;