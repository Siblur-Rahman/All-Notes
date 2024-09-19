import Blog from "../../shared/Blog";


const JWToken = () => {
    return (
        <div className="topic-border">
            <Blog
            id={'JSON Web Token (JWT)'}
            fileName={'index.js'}
            npmCode={'npm install jsonwebtoken'}
            time={'csm-11-last 41:00 p-2 & 1:13:26, 68-6, 7'}
            url={'https://github.com/auth0/node-jsonwebtoken'}
            code={`const jwt = require('jsonwebtoken');`}
            />
            <h2 className="text-2xl">JWT Set to LocalStorage <span className="text-yellow-500">68-6- </span></h2>
            <Blog
            topic={'secret creation'}
            time={'68-6 8:00'}
            />
            <div className='text-2xl'>we can use jwt token in axios <span className="text-green-500">68-7 6:30</span></div>

        </div>
    );
};

export default JWToken;