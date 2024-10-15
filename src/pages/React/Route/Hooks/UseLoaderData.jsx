import Blog from "../../../../shared/Blog";


const UseLoaderData = () => {
    return (
        <div className="useLoaderData topic-border">
            <Blog
            topic={'useLoaderData'}
            topicURL={'https://reactrouter.com/en/main/hooks/use-loader-data#useloaderdata'}
            fileName={'Route.jsx'}
            codes={
                [
                "path:'updateItem/:id',",
                "element:<AdminRoute><UpdateItem/></AdminRoute>,",
                "loader: ({params}) => fetch(`http://localhost:5000/menu/${params.id}`)"
                
                ]
            }
            />
            <Blog
                fileName={'UpdateItem.jsx'}
                code={"const {_id, name, recipe, category, price} = useLoaderData();"}
            />
        </div>
    );
};

export default UseLoaderData;