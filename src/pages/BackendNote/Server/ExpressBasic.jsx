import Blog from "../../../shared/Blog";

const ExpressBasic = () => {
    return (
        <div>
            <Blog
            topic={'Express Basic Stucture'}
            code={`
const express = require('express')
const app = express()
const port = 3000

app.get('/', (req, res) => {
  res.send('Hello World!')
})

app.listen(port, () => {
  console.log('Example app listening on port doller{port}')
})
                `}
            />
        </div>
    );
};

export default ExpressBasic;