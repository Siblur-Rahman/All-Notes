import { useContext } from "react";
import { ToolsForCode } from "../../../CodeProvider";
import '../../../components/CommonCSS/CommonCSS.css'
const arrowFunction =` //Arrow function with single parameter
      
      const doubleIt = num => num * 2;
      const result = doubleIt(15);
      console.log(result)

      // Access object property

      const getAge = person => person.age;
      const student = {name:'Farwah Ahmad', age:5}
      const age = getAge(student);
      console.log(age);
      
      //access array element

      const getThird = number=>number[2];
      const third = getThird([4, 6, 8, 9])
      console.log(third);//8

      //Arrow function with Multiply parameter
      
      const doubleIt = (num1, num2) => num1 + num2;
      const result = doubleIt(15, 1);
      console.log(result)

      //Arrow function without parameter

      const give5 = () => 5;
      const  result = give5();
      console.log(result)

      //Multiple task in a function Body

      const doMath = (num1, num2) => {
      const add = num1 + num2;
      const subst = num1 - num2;

      const result = add * subst;
      return result;
      };
      const finalResult = doMath(15, 10);
      console.log(finalResult);
      `
const ArrowFunction = () => {
    const {curlyBraceOpen, curlyBraceClosed, greaterThan,
        lessThan} = useContext(ToolsForCode)
    return (
        <div id="arrowfunction" className="to_jump">
            <h2 className="heading">JavaScript Arrow Function<span><a href="https://www.w3schools.com/js/js_arrow_function.asp" target="_blank"> Details</a></span></h2>
            <h2>10. 23-5 Arrow function, multiple parameter, function body</h2>
            <h2 className="heading">Arrow function</h2>
            <pre className="code">
                {arrowFunction}
            </pre>
        </div>
    );
};

export default ArrowFunction;