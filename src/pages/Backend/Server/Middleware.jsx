import Blog from "../../../Shared/Blog";

const Middleware = () => {
    return (
        <div>
            <Blog
            fileName={'index.js'}
            topic={'Middleware'}
            url={'https://expressjs.com/en/resources/middleware.html'}
            />
            <div className="code">
            <Blog
            topic={'cors'}
            url={'https://expressjs.com/en/resources/middleware/cors.html'}
            npmCode={'npm install cors'}
            code={`
const cors = require('cors');
app.use(cors());         
                `}
            />
            </div>
        </div>
    );
};

export default Middleware;