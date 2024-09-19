import React from 'react';
import Blog from '../../../shared/Blog';
const tic= '<span className="text-yellow-300">`</span>'

const DisplayElement = () => {
    return (
        <div>
            <Blog
                id={'DisplayElement'}
    codes={['{cart.length? <Link to={`/dashboard/payment`}>',    
    `
    <button className="btn btn-primary">pay</button>
    </Link>
    :
    <button disabled className="btn btn-primary">pay</button>
    }
    `]}
            />
        </div>
    );
};

export default DisplayElement;