import Blog from "../../../shared/Blog";
import Example from "../../../shared/Example";
import Syntax from "../../../shared/Syntax";

const FetchAPI = () => {
    const examples =[
        {
            heading:'',
            to_jump:'',
            code:
            `

            `,
            output:``   
        },
        {
            heading:'',
            code:``,
            output:``    
        }
    ]
    return (
        <div className="Fetch Intro topic-border">
            <Blog
                topic={'JS Fetch API'}
                url={'https://www.tutorialspoint.com/javascript/javascript_fetch_api.htm'}
                heading={'What is a Fetch API?'}
                define={<>
                The JavaScript <span className="text-highlight">Fetch API</span> is a web API that allows a web browser to make HTTP request to the web server. In JavaScript, the fetch API is introduced in the ES6 version. It is an alternative of the XMLHttpRequest (XHR) object, used to make a <span className="text-highlight">'GET', 'POST', 'PUT', or 'DELETE'</span>  request to the server.
                </>}
                syntax={
                <Syntax 
                    synText={'You can follow the syntax below to use the fetch() API in JavaScript –'}
                    syntax={`
                    window.fetch(URL, [options]);
                    OR
                    fetch(URL, [options]);
                    `}
                    synDescription={[
                        `
                        URL - It is an API endpoint where you need to make a request.
                        `,
                        `
                        [options] - It is an optional parameter. It is an object containing the method, headers, etc., as a key.
                        `
                    ]}
                    />
                }


            />
            
            {/* Handling Fetch() API Response with 'then...catch' Block */}
           <div className="with 'then...catch' Block">
           <Blog
                heading={<>Handling Fetch() API Response with <span className="text-yellow-500">'then...catch'</span> Block</>}
                syntax={<Syntax
                    syntax={
                        `
        fetch(URL)
        .then(data => {
        // Handle data
        })
        .catch(err=> {
        // Handle error
        })`
                    }
                />}

                example={<Example
                    exCode={`
                        <html>
<body>
   <div id = "output"> </div>
   <script>
      const output = document.getElementById('output');
      const URL = 'https://jsonplaceholder.typicode.com/todos/5';
      fetch(URL)
	  .then(res => res.json())
	  .then(data => {
	     output.innerHTML += "The data from the API is: " + "<br>";
	  	 output.innerHTML += JSON.stringify(data);
   	  });
   </script>
</body>
</html>
                        `}
                exOutput={
`The data from the API is:
{"userId":1,"id":5,"title":"laboriosam mollitia et enim quasi adipisci quia provident illum","completed":false}` }
                
                />}

                />
           </div>

            {/* Handling Fetch() API Response Asynchronously */}
           <div className="Response Asynchronously">
           <Blog
                heading={<>Handling Fetch() API <span className="text-yellow-500">Response Asynchronously</span></>}
                syntax={<Syntax
                    syntax={
                        `
let data = await fetch(URL);
data = await data.json();
`
                    }
                />}

                example={<Example
                    exCode={`
<html>
<body>
<div id = "output"> </div>
<script>
   async function getData() {
      let output = document.getElementById('output');
      let URL = 'https://jsonplaceholder.typicode.com/todos/6';
      let data = await fetch(URL);
      data = await data.json();
      output.innerHTML += "The data from the API is: " + "<br>";
      output.innerHTML += JSON.stringify(data);
   }
   getData(); 
</script>
</body>
</html>
                        `}
                exOutput={
`The data from the API is:
{"userId":1,"id":6,"title":"qui ullam ratione quibusdam voluptatem quia omnis","completed":false}` }
                
                />}

                />
           </div>

            {/* Options with Fetch() API */}
           <div className="Options with Fetch() API">
           <Blog
                heading={<><span className="text-yellow-500">Options </span> with Fetch() API</>}
                syntax={<Syntax
                    syntax={
                        `
fetch(URL, {
    method: "GET",
    body: JSON.stringify(data),
    mode: "no-cors",
    cache: "no-cache",
    credentials: "same-origin",
    headers: {
        "Content-Type": "application/json",
    },
    redirect: "follow",
})
`
                    }
                synDescription={[

`
method − It takes the 'GET', 'POST', 'PUT', and 'DELETE' methods as a value based on what kind of request you want to make.`,

`body − It is used to pass the data into the string format.`,

`mode − It takes the 'cors', 'no-cors', 'same-origin', etc. values for security reasons.`,

`cache − It takes the '*default', 'no-cache', 'reload', etc. values.`,

`credentials − It takes 'same-origin', 'omit', etc. values.`,

`headers − You can pass the headers with this attribute to the request.`,

`redirect − If you want users to redirect to the other web page after fulfilling the request, you can use the redirect attribute.
                    `
                ]}
                />}

                example={<Example
                    exCode={`
<html>
<body>
<div id = "output"> </div>
<script>
   async function getData() {
      let output = document.getElementById('output');
      let URL = 'https://jsonplaceholder.typicode.com/todos/6';
      let data = await fetch(URL);
      data = await data.json();
      output.innerHTML += "The data from the API is: " + "<br>";
      output.innerHTML += JSON.stringify(data);
   }
   getData(); 
</script>
</body>
</html>
                        `}
                exOutput={
`The data from the API is:
{"userId":1,"id":6,"title":"qui ullam ratione quibusdam voluptatem quia omnis","completed":false}` }
                
                />}

                />
           </div>
        </div>
                // example={examples.map((ex, index) =><Example
                //     heading={ex.heading}
                //     index={index+1}
                //     exCode={ex.code}
                //     exOutput={ex.output}
                // />)}
    );
};

export default FetchAPI;