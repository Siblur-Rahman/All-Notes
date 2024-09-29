import Blog from "../../../shared/Blog";

const NoticeToFunction = () => {
    return (
        <div className="Notice To Function">
             <Blog 
                fileName={'Notes:'}
                markCode={true}
                code={<div>By Default <span className ='highlight'>Return</span> undenined</div>}
                codes={[
                    "",
                    `
    const a = () =>{
        console.log('Hellow World')
    }

    const b = a()
    console.log(b)
    // undenined
                    `,
                    "",
                    "",
                ]}
            />
             <Blog 
                fileName={'Notes:'}
                markCode={true}
                code={<>If <span className = 'text-yellow-300'>retunt Multiple line</span> it have to wrap () </>}
                codes={[
                    "",
                    `
    const Func = () => (console.log('Hello World'),
    console.log('Hi, Farwah')
    );
                    `
                ]}
            />
             <Blog 
                fileName={'Notes:'}
                markCode={true}
                code={<>If <span className = 'text-yellow-300'>retunt Object without {'{'} {'}'}</span> it have to wrap () </>}
                codes={[
                    "",
                `
    const Func = () => ({
        a: 5,
        b: 6
    });
    console.log(Func())
                    `
                ]}
            />
        </div>
    );
};

export default NoticeToFunction;