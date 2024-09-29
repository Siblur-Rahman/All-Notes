import Blog from "../../../shared/Blog";

const Onclick = () => {
   
    return (
        <div className="topic-border onclick">
            <Blog
                topic={'HTML DOM onclick Event'}
                url={'https://www.geeksforgeeks.org/html-dom-onclick-event/'}
                defineWithIndex={['HTML DOM onclick Event The HTML DOM onclick event occurs when the user clicks on an element.',
                'There are three ways to add onclick events:']}
            />
            <div className="heading">Funtion :</div>
            <Blog
                code={"const func = ()=> alert('Hello World')"}
            />

            <div className="heading">Example 1: Using HTML </div>
            <Blog
                code={'<button onclick="func()">Click Me</button>'}
                markCode={true}
            />

            <div className="heading">Example 2: Using JavaScript</div>
            <Blog
            markCode={true}
                codes={[
                    "document.getElementById('js').onclick = func",
                        `document.getElementById("js").onclick = function() { 
                            func() 
                        };    `
                    ]}
            />
            <Blog
                heading={'Example 3: In JavaScript, using the addEventListener() method:'}
                code={"document.getElementById('add').addEventListener('click', func)"}
            />
            
        </div>
    );
};

export default Onclick;