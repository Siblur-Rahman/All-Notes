
import Blog from './../../../shared/Blog';

const SpreedOperator = () => {
    return (
        <div className='Spreed Operator'>
            <Blog
                topic={'Spreed Operator'}
                url={'https://www.tutorialspoint.com/javascript/javascript_spread_operator.htm'}
                heading={'What is a Spread Operator?'}
                defineWithIndex={[
                    'The JavaScript spread operator (…) allows us to spread out elements of an iterable such as an array.',
                    'The spread operator is represented with three dots (…). This is operator is introduced in ES6.',
                    'The main use cases of the spread operator are to copy array elements, concatenate arrays or objects with rest parameters, etc.',
                    <br />,
                    <br />,
                    "Let's take an example to expand the elements of an array –"
                ]}
                code={
                    `
                    const numbersOne = [1, 2, 3];
                    const numbersTwo = [4, 5, 6];
                    const numbersCombined = [...numbersOne, ...numbersTwo];
                    // [ 1, 2, 3, 4, 5, 6 ]
                    `
                    }
            />
            {/* concatenate the arrays. */}
            <Blog
                h2={<h2>The JavaScript spread operator can be used to <span className='text-yellow-500'>concatenate</span> the arrays.</h2>}

                code={
                    `
                    const numbersOne = [1, 2, 3];
                    const numbersTwo = [4, 5, 6];
                    const numbersCombined = [...numbersOne, ...numbersTwo];
                    // [ 1, 2, 3, 4, 5, 6 ]
                    `
                    }
            />
            {/*Copy or Clone the arrays. */}
            <Blog
                h2={<h2>The JavaScript spread operator can be used to <span className='text-yellow-500'>Copy</span> OR <span className='text-yellow-500'>Clone</span> the arrays.</h2>}

                code={
                    `
                    const numbersOne = [1, 2, 3];
                    const numbersOneClone = [...numbersOne];
                    console.log(numbersOneClone);
                    // [ 1, 2, 3 ]
                    `
                    }
            />
            {/* concatenate the Object. */}
            <Blog
                h2={<h2>The JavaScript spread operator can be used to <span className='text-yellow-500'>Concatenate</span>  Objects.</h2>}

                code={
                    `
<html>
    <body>
    <div id = "result1"></div>
    <div id = "result2"></div>
    <script>
        const car = {
            gears: 6,
            color: "Black"
        }
        document.getElementById("result1").innerHTML = JSON.stringify(car);
        
        const BMW = {
            model: "X5",
            year: 2019,
            ...car,
        }
        document.getElementById("result2").innerHTML = JSON.stringify(BMW);
    </script>
    </body>
</html>

// {"gears":6,"color":"Black"}
// {"model":"X5","year":2019,"gears":6,"color":"Black"}
                    `
                    }
            />
            {/*Function Rest Parameters */}
            <Blog
                h2={<h2> <span className='text-yellow-500'>Function Rest Parameters</span> </h2>}

                code={
                    `
<html>
<body>
   <div id = "result"></div>
   <script>
  
      function sum(a, ...nums) {
         let sum = a;
         for (let i = 0; i < nums.length; i++) {
            sum += nums[i];
         }
         document.getElementById("result").innerHTML = sum;
      }

      sum(3, 6, 9, 8, 6, 5, 3, 3, 2, 1);

   </script>
</body>
</html>
// 46
                    `
                    }
            />
        </div>
    );
};

export default SpreedOperator;