import React from 'react';
import ArrayMetheds from '../ArrayMethods/ArrayMetheds';
import Blog from '../../../../shared/Blog';

const Array = () => {

    return (
        <div className=''>
            <Blog id={'Array'} />
            <Blog topic={'W3s'}
                url={'https://www.w3schools.com/js/js_arrays.asp'}
            />

                    {/* Array Methods */}
                    <ArrayMetheds/>
        </div>
    );
};

export default Array;