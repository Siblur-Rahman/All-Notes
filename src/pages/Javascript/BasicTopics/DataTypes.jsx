import Blog from "../../../shared/Blog";

const DataTypes = () => {
    return (   
            <div className="topic-border Data Types">
                <Blog
                    topic={'Data Types (geeksforgeeks)'}
                    url={'https://www.tutorialspoint.com/javascript/javascript_data_types.htm'}
                />
                <Blog
                    topic={'Data Types (tutorialspoint)'}
                    url={'https://www.tutorialspoint.com/javascript/javascript_data_types.htm'}
                />
                <Blog
                 heading={'Data Types'}
                 define={<>
                 JavaScript data types are categorized into two parts i.e. <span className="text-yellow-500"> primitive</span> and <span className="text-yellow-500"> non-primitive</span> types. The <span className="text-yellow-500"> primitive</span> data types include Number, String, Boolean, Null, Undefined, and Symbol. <span className="text-yellow-500"> Non-primitive</span> types include Object, Array, and Function. The latest ECMAScript standard defines eight data types out of which seven data types are Primitive(predefined) and one complex or Non-Primitive.
                 
                 </>}
                />
            </div>
    );
};

export default DataTypes;