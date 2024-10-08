import Blog from "../../../../shared/Blog";

const Filter = () => {
    return (
        <div className="Filter">
            <Blog
                topic={'Filter'}
                url={'https://www.tutorialspoint.com/javascript/array_filter.htm'}
                define={
                    <>
                    In JavaScript, the <span className="text-yellow-500">Array.filter()</span> method is used to create a new array with elements that pass a certain condition. <br />
                     It takes a callback function as its argument which is executed for each and every element in the array. If the callback function returns true, the element is added to the new array or else it is filtered out.
                    <br /><br />
                    This method does not change or modify the original array. Also, it does not execute the callback function for empty elements.
                    </>
                }
                // syntax={'array.filter(callbackFn (element, index, array), thisArg);'}
            />
            <Blog
                heading={'Example'}
                code={`
    const numbers = [2, 3, 5, 8, 9];
    const bigger = numbers.filter(x => x < 8);
    console.log(bigger)
    // [ 2, 3, 5 ]
                    `}
            />
            <Blog
                heading={'Example'}
                code={`
         const student =[ 

         {id: 1, name: "Sunny"}, 

         {id: 2, name: "Shuv"}, 

         {id: 3, name: "Hohel"}, 

         {id: 4, name: "Mishu"} 

         ] 

         

         const id = student.filter(s =>s.id >2) 

         console.log(id)
                    `}
            />
            
        </div>
    );
};

export default Filter;