import PropTypes from 'prop-types';
const Blog = ({topic,mark, fileName, npmCode, heading, define, defineWithIndex, url, video, time, code}) => {
    return (
        <>
        {mark && <h2 className='mark'>{mark}</h2>
            
        }
        {topic && <h2 className="to_jump my-10px" id={topic}>{topic && topic}<span className="blue"> {time}
        </span>{url && <a href={url} target="_blank"> Detals</a>}</h2>}
        {npmCode && <div className="npmCode">{npmCode}</div>}
        {define && <p>{define}</p>}
        {
            console.log(defineWithIndex)
        }
        {
            // defineWithIndex.map((item, index )=><p key={index}>{item}</p>)
        }
        {/* {defineWithIndex.map((item, index) =><p key={index}>{index+1}. {item}</p>)} */}
        {/* {defineWithIndex && <div>{defineWithIndex.map((value, index) => {<p>{index+1}. {value}</p>})}</div>} */}
        {code && <pre className="code mt-5px">
            {fileName && <p className='read'>{fileName}</p>}
            {code}
        </pre>
        }
        {video && <video src={video} controls width="90%" height="500px"></video>}
        </>
    );
};
Blog.propTypes = {
    defineWithIndex: PropTypes.array,
    // prop-2: PropTypes.func.isRequired
    }
export default Blog;