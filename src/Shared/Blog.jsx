import PropTypes from 'prop-types';
import '../shared/Common.css'



const Blog = ({id, topic, mark, fileName, npmCode, heading, define, defineBG_highlight, defineWithIndex, index, url, details, video, time, codes, markCode, code, syntax, code_highlight, h2, example}) => {
    return (
        <>
        {fileName && <p className='red'>{fileName}</p>}

        {mark && h2 && <h2 className='mark text-2xl'>{mark}</h2>}

        {id && <div><h2 className='id' id={id}>{id}</h2></div>}   

        {topic && <h2 className="red text-2xl topic">{topic}<span className="blue"> {time}

        </span>{url && <a href={url} target="_blank" className='text-yellow-500'> Detals</a>}</h2>}
        {
            heading && <h2 className='red text-2xl'>{heading} {details && <a href={details} target='_blank'><span className='text-yellow-300'> Details</span></a>}</h2>
        }

        {npmCode && <div className="npmCode my-10px">
           { fileName && <p className='text-red-500 text-xl'>{fileName}</p>}
            {npmCode}
            </div>}

        {h2 && <h2 className='text-2xl my-5'>{h2}</h2>}

        {define && <div className='p-4'>{define}</div>}
        {defineBG_highlight && <div className='p-4 bg-zinc-500'>{defineBG_highlight}</div>}
        {
            defineWithIndex &&  defineWithIndex.map((item, ind )=><p key={index}>{index && <>{index+1} .</>} {item}</p>)
        }

        {syntax && <>{syntax}</>}

        {code && <pre className='code'>
            {code}
        </pre>
        }

        {codes && <pre className=''>
            {
                codes?.map((code, index) =><div className={`${(index%2 && markCode)? 'code-highlight': 'code'}`}>{code}</div>)
                
            }
        </pre>
        }

        {details && <a href={details} target='_blank'><span className='text-yellow-300'> Details</span></a>}

        {video && <video src={video} controls width="90%" height="500px"></video>}
        {example && <> {example} </>}
        </>
    );
};
Blog.propTypes = {
    defineWithIndex: PropTypes.array,
    codes: PropTypes.array,
    // prop-2: PropTypes.func.isRequired
    }
export default Blog;