import Blog from "../../../../shared/Blog";

const Find = () => {
    return (
        <div className="Find topic-border">
           <Blog
                topic={'JavaScript - Array find() Method'}
                url={'https://www.tutorialspoint.com/javascript/array_find.htm'}
                define={
                    <>
                    
                    In JavaScript, the <span className="text-yellow-500">Array.find()</span>   method executes a callback function on each array element and retrieves the first element in the array that satisfies a specified condition of the callback function.
                        <br /><br />
                    If the array elements does not satisfy the specific condition, this method returns “undefined”. It does not execute the function for empty array elements. This method does not change the original array.
                        <br /><br />
                    The difference between findIndex() and find() method is; the findIndex() method returns the first index position of the element that satisfies the testing function (rather than the element value).
                     <br />
                     
                    <br /><br />
                    
                    </>
                }
            />
            <Blog
                heading={'Example'}
                code={`
   
                    `}
            />
            <Blog
                heading={'Example'}
                code={`

                    `}
            />
            
        </div>
    );
};

export default Find;