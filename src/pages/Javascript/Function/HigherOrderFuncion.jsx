import Blog from "../../../shared/Blog";
import { handleToggleDesplay } from "../../../shared/CommonJS";

const HigherOrderFuncion = () => {
    function calculate(type) {
        if(type === 'add'){
            return (a, b) => a+b
        } 
        else if(type === 'subtract'){
            return (a, b) => a-b

        }
         else if(type === 'multiply'){
            return (a, b) => a*b

        }
         else if(type === 'divide'){
            return (a, b) => a/b

        }
    };
    const add = calculate('add');
    const subtract = calculate('subtract');
    const multiply = calculate('multiply');
    const divide = calculate('divide');
    return (
        <div className="" id="Higher-Order Funcion">
            <div className="topic-border">
                <Blog
                    topic={'Higher-Order Funcion'}
                />
                <span className="text-yellow-300">Higher order functions</span> (HOFs) in JavaScript are functions that can do at least one of both:
                <br /><br />
                Accept other functions as arguments. <br />
                Return a function as a result.
                <Blog details={'https://www.freecodecamp.org/news/higher-order-functions-explained/'}/>
                <Blog />
                {/* Display Code */}
                <button onClick={handleToggleDesplay} className="w-full btn btn-outline text-red-600 text-2xl">Code</button>
            <div className="hidden">
            <Blog
                    code={`
    function calculate(type) {
            if(type === 'add'){
                return (a, b) => a+b
            } 
            else if(type === 'subtract'){
                return (a, b) => a-b

            }
            else if(type === 'multiply'){
                return (a, b) => a*b

            }
            else if(type === 'divide'){
                return (a, b) => a/b

            }
        };
        const add = calculate('add');
        const subtract = calculate('subtract');
        const multiply = calculate('multiply');
        const divide = calculate('divide');                  
                        `}
                />
                {/* Output */}
                <div>
                <span className="text-yellow-300">Output</span>
                <p>{add(3, 4)}</p>
                <p>{subtract(3, 4)}</p>
                <p>{multiply(3, 4)}</p>
                <p>{divide(3, 4)}</p>
                </div>
                <Blog/>
                <Blog/>
                <Blog/>
                <Blog/>
            </div>
            </div>
        </div>

    );
};

export default HigherOrderFuncion;