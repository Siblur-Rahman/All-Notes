import React from 'react';
import Blog from '../../../shared/Blog';

const AnonymousFunction = () => {
    return (
        <div className='Anonymous Functions topic-border'>
            <Blog
            topic={'Anonymous Functions'}
            url={'https://www.geeksforgeeks.org/javascript-anonymous-functions'}
            define={' An anonymous function is simply a function that does not have a name.'}
            markCode={true}
            codes={[
                '',
        `
        function() {
            // Function Body
        }
                `]}
            />
        </div>
    );
};

export default AnonymousFunction;