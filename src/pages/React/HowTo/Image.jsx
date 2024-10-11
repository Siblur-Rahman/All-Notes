import React from 'react';
import Blog from '../../../shared/Blog';
import Details from '../../../shared/Details';

const Image = () => {
    return (
        <div className='Image Add'>
            <Blog
                topic={'Image Add'}
                heading={'Some Free Picture WebSite'}
                defineWithIndex={[<>https://www.freepik.com <Details details={'https://www.freepik.com'}/></>,
                <>https://unsplash.com 42-2 4:40 <Details details={'https://unsplash.com/'}/></>,
            ]}      
            />
            <Blog
                // topic={'Image Add'}
                heading={'Image Upload WebSite'}
                defineWithIndex={[<>https://imgbb.com 42-2 5:30 <Details details={'https://imgbb.com/'}/></>,
                // <>https://unsplash.com 42-2 4:40 <Details details={'https://unsplash.com/'}/></>,
            ]}      
            />
            
        </div>
    );
};

export default Image;