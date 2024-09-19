import Blog from "../../../shared/Blog";

const Split = () => {
    const descr = `
The split() method splits a string into an array of substrings.

The split() method returns the new array.

The split() method does not change the original string.

If (" ") is used as separator, the string is split between words.
    `
    return (
        <div>
            <Blog
            id={'String Split'}
            url={'https://www.w3schools.com/jsref/jsref_split.asp'}
             topic={'Discription'}
             defineWithIndex={descr.split('.')}
            />
        </div>
    );
};

export default Split;