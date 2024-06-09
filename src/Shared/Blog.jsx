import PropTypes from 'prop-types';



const Blog = ({topic,mark, fileName, npmCode, heading, define, defineWithIndex, url, video, time, code}) => {
    console.log(defineWithIndex)
    return (
        <>
        {mark && <h2 className='mark'>{mark}</h2>
            
            }
        {topic && <h2 className="to_jump mt-10px" id={topic}>{topic && topic}<span className="blue"> {time}
        </span>{url && <a href={url} target="_blank"> Detals</a>}</h2>}
        {/* {
            fileName&& <h2 className='red'>{fileName}</h2>
        } */}
        {npmCode && <div className="npmCode my-10px">
           { fileName&& <p className='red'>{fileName}</p>}
            {npmCode}
            </div>}
        {define && <p>{define}</p>}
        <br />
        {
            defineWithIndex &&  defineWithIndex.map((item, index )=><p key={index}>{item}</p>)
        }
        {code && <pre className="code">
            {fileName && <p className='red'>{fileName}</p>}
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