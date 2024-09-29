import Blog from "../../../shared/Blog";

const ForLoop = () => {
    return (   
            <div className="topic-border For loop">
                <Blog
                    topic={'JavaScript For Loop'}
                    heading={'Syntax'}
                    url={''}
                    code={`
        for (initialization; condition; increment)  
         {  
            code to be executed  
         } 
                        `}
                />

                <Blog
                    heading={'Example'}
                    code={`
            for(let i=1; i<=10; i++){
                let text='This is '
                console.log(text+i);
            }
             `}
                />

                <Blog
                    heading={'For Over an Array'}
                    code={
                        `
        const numbers = [1, 2, 3, 4, 5];

        for(let i = 0; i < number.length; i++){
            console.log('This is ', number[i])
        }
                        `}
                />
                <Blog
                    code={
                        `
    const numbers = [1, 2, 3, 4, 5];
    let i = 0;
    for(; i < numbers.length; i++){
        console.log('This is ', numbers[i])
    }
                        `
                    }
                />
            </div>
    );
};

export default ForLoop;