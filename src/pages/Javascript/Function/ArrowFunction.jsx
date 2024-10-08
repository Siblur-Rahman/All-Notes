import Blog from "../../../shared/Blog";

const ArrowFunction = () => {
    return (
        <div className="Arrow Function to_jump" id="Arrow Function">
                <div className="topic-border">
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
        </div>
    );
};

export default ArrowFunction;