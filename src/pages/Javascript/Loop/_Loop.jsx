import Blog from "../../../shared/Blog";
import ForLoop from "./ForLoop";

const _Loop = () => {
    return (   
            <div>
                <div className="js Loop to_jump">
                    <Blog
                        topic={'JavaScript Loops'}
                        url={''}
                        defineWithIndex={[
                            'Loops can execute a block of code a number of times.',
                            'Loops are handy, if you want to run the same code over and over again, each time with a different value.',
                            'Often this is the case when working with arrays:',
                        ]}
                    />

                    <Blog
                        heading={'Different Kinds of Loops'}
                        defineWithIndex={[
                            <div><span className="heading">for</span> - loops through a block of code a number of times</div>,
                            <div><span className="heading">for/in</span>  - loops through the properties of an object</div>,
                            <div> <span className="heading">for/of</span> - loops through the values of an iterable object</div>,
                            <div> <span className="heading">while - </span> loops through a block of code while a specified condition is true</div>,
                            <div> <span className="heading"> do/while</span> - also loops through a block of code while a specified condition is true</div>,
                        ]}
                    />
                </div>
                <ForLoop/> 
            </div>
    );
};

export default _Loop;