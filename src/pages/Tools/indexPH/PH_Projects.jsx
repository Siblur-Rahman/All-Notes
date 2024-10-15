import React from 'react';
import Blog from '../../../shared/Blog';

const PH_Projects = () => {
    const projects = [
        {
            name:'CareerHub',
            information:'MS-8, Module: 47 CareerHub with router',
            link:'https://web.programming-hero.com/web-9/video/web-9-47-1-project-setup-with-react-router-tailwind-and-daisy-ui'
        }
    ]
    return (
        <div className='PH_Projects'>
            <Blog 
            topic={'PH Projects'}
            />
            {
                projects.map((project, index) =><Blog
                    heading={project.name}
                    head_time={project.information}
                    head_timeURL={project.link}
                />)
            }
        </div>
    );
};

export default PH_Projects;