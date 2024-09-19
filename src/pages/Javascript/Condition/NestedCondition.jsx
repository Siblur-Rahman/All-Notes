import React from 'react';
import Blog from '../../../shared/Blog';

const NestedCondition = () => {
    return (
        <div className='to_jump' id='Nested Condition'>
            <Blog
                topic={'Nested Condition'}
                code={"user? condition? 'double true' : 'one true' : 'false"}
            />
            
        </div>
    );
};

export default NestedCondition;