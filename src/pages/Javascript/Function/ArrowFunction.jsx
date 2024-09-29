import Blog from "../../../shared/Blog";

const ArrowFunction = () => {
    return (
        <div className="Arrow Function topic-border">
                        <Blog
            topic={'Arrow Fanction'}
            code={
        `
        const Func = () => {
            console.log('Hello World')
        }
        Func()

        const Func = () => console.log('Hello World');

        Func()
                `}
            />
        </div>
    );
};

export default ArrowFunction;