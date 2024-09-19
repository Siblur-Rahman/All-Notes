import PropTypes from 'prop-types';



const Blog = ({id, topic, mark, fileName, npmCode, heading, define, defineWithIndex, url, details,
     video, time, codes, code, code_highlight}) => {
    return (
        <>
        {mark && <h2 className='mark text-2xl'>{mark}</h2>}
        {id && <div><h2 className='id' id={id}>{id}</h2></div>}   
        {topic && <h2 className="red text-2xl topic" id={topic}>{topic}<span className="blue"> {time}
        </span>{url && <a href={url} target="_blank" className='text-yellow-500'> Detals</a>}</h2>}
        {
            heading && <h2 className='red text-2xl text-center'>{heading}</h2>
        }
        {npmCode && <div className="npmCode my-10px">
           { fileName && <p className='text-red-500 text-xl'>{fileName}</p>}
            {npmCode}
            </div>}
        {define && <p>{define}</p>}
        {
            defineWithIndex &&  defineWithIndex.map((item, index )=><p key={index}>{index+1} . {item}</p>)
        }
        {code && <pre className={`${code_highlight? 'code-highlight':'code'}`}>
            {fileName && <p className='red'>{fileName}</p>}
            {code}
        </pre>
        }
        {/* mark Odd row */}
        {codes && <pre className='code'>
            {fileName && <p className='red'>{fileName}</p>}
            {
                codes?.map((code, index) =><div className={`${index%2 && mark-code && 'code-highlight' }`}>{code}</div>)
                
            }
        </pre>
        }
        {details && <a href={details} target='_blank'><span className='text-yellow-300'> Details</span></a>}
        {video && <video src={video} controls width="90%" height="500px"></video>}
        </>
    );
};
Blog.propTypes = {
    defineWithIndex: PropTypes.array,
    codes: PropTypes.array,
    // prop-2: PropTypes.func.isRequired
    }
export default Blog;