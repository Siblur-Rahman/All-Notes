import Blog from "../../../shared/Blog";

const InstallNodeExpress = () => {
    return (
        <div>
            <Blog
            topic={'Install Node-Express'}
            time={'53_5-1'}
            url={'https://expressjs.com/en/starter/installing.html'}
            />
            <div className="code">
                <Blog
                defineWithIndex={['mkdir folder name','cd folder name', 'npm init', 'npm install express','touch index.js']}
                />
                <Blog
                topic={'Install nodemon for restart server'}
                url={'https://www.digitalocean.com/community/tutorials/workflow-nodemon'}
                time={'53_5-2 5:45'}
                npmCode={'npm install nodemon --global'}
                />
            </div>
        </div>
    );
};

export default InstallNodeExpress;