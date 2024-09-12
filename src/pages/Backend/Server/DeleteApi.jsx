import Blog from "../../../Shared/Blog";

const DeleteApi = () => {
    return (
        <div className="topic-border">
            <Blog
            id={'Delete API'}
            notes={[
                {
                    project:'PracticeAll with React',
                    file:'Wishlist'
                }
            ]}
            />
        </div>
    );
};

export default DeleteApi;