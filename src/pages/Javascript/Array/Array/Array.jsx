import React from 'react';
import ArrayMetheds from '../ArrayMethods/ArrayMetheds';
import Blog from '../../../../shared/Blog';

const Array = () => {

    return (
        <div>
            <div className='Array'>
            <Blog topic={'Array'} url={'https://www.tutorialspoint.com/javascript/javascript_arrays_object.htm'}/>
            <Blog topic={'W3s'}
                url={'https://www.w3schools.com/js/js_arrays.asp'}
            />
            <mark>
             An array is a special variable, which can hold more than one value:
            </mark>
            </div>

                    {/* Array Methods */}
                    <ArrayMetheds/>
        </div>
    );
};

export default Array;