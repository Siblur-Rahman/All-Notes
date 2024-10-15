import Blog from "../../../../shared/Blog";

const DynamicRouteLink = () => {
    return (
        <div className="Route-Link Dynamic topic-border">
            <Blog 
                topic={'Dynamic Route-Link'}
                heading={'Link'}
                code={<>{"<Link to={`/order/${coverTitle}`}>"}</>}
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