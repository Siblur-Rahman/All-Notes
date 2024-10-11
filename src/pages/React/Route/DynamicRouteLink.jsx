import Blog from "../../../shared/Blog";

const DynamicRouteLink = () => {
    return (
        <div className="Route-Link Dynamic">
            <Blog 
                topic={'Dynamic Route-Link'}
                heading={'Link'}
                code={'`/order/${coverTitle}`'}
            />
            <Blog 
                heading={'Route'}
                code={'order/:category'}
            />
            <Blog 
                heading={'order.jsx'}
                code={`
    import { useParams } from "react-router-dom";

    const {category} = useParams();
                    
                    `}
            />
            
        </div>
    );
};

export default DynamicRouteLink;