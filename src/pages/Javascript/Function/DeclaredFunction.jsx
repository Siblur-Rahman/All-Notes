import Blog from "../../../shared/Blog";

const DeclaredFunction = () => {
    return (
        <div className="Declared Function">
             <div className="">
            <Blog
                topic={'Declared Function'}
                />
            <Blog
            topic={'Regular Function or Fanction Statement'}
            code={
        `
        function hello (){
            console.log('Hello World')
        }
        hello()
                `}
            />

            <Blog
            topic={'Function Expression'}
            define={' A function expression is very similar to, and has almost the same syntax as, a function declaration. The main difference between a function expression and a function declaration is the function name, which can be omitted in function expressions to create anonymous functions.'}

            markCode={true}
            codes={[
                ``,
        `
        const show = function(para){
            console.log('Hello World ');
        }
 `,
 ``,
 `           
        const Func = function hello() {
                console.log('Hello World');

        };
                `]}
            />
            
            </div>
        </div>
    );
};

export default DeclaredFunction;