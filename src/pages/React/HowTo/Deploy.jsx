import React from 'react';
import Blog from '../../../shared/Blog';

const Deploy = () => {
    return (
        <div className='Deploy topic-border'>
            <Blog 
                heading={'deploy to surge'} head_time={'42-8 00:15'} head_timeURL={'https://web.programming-hero.com/web-9/video/web-9-42-8-remove-bookmark-after-read-and-deploy-to-surge'}/>
            <Blog 
                heading={'deploy to surge'} 
                head_time={' 47-9 9:30'} 
                head_timeURL={'https://web.programming-hero.com/web-9/video/web-9-47-9-implement-job-filter-and-deploy-to-netlify-and-surge'}
                npmCode={<pre>
                    {`
    npm run build
    surge dist
                    `}
                </pre>}
                />

            <div className="topic-border">
                <Blog 
                topic={'deploy to Netlify'}
                topicURL={'https://app.netlify.com/teams/msrahman048/sites'}
                npmCode={'npm run build'}
                defineBG_highlight={'To Create _redirects File in public Folder and write in file /* /index.html 200'}
                heading={'deploy to Netlify'} 
                head_time={' 47-9 6:00'} 
                head_timeURL={'https://web.programming-hero.com/web-9/video/web-9-47-9-implement-job-filter-and-deploy-to-netlify-and-surge'}
                code={`
                    Want to deploy a new site without connecting to Git?
                    Drag and drop your site output folder here

                    Or, browse to upload.
                                        `}

                />
            </div>

            
        </div>
    );
};

export default Deploy;