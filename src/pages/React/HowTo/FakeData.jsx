import Blog from "../../../shared/Blog";

const FakeData = () => {
    return (
        <div className="Fake Data Ctreate">
            <Blog
                heading={'AI WebSite'}
                define={'https://poe.com/chat/25muq8r89dev73avl5o //My registard wibsite with sible'}
            />
            <Blog
                topic={'Search Fake Data'}
                url={'https://web.programming-hero.com/web-9/video/web-9-42-2-create-fake-data-for-the-blogs-and-load-data'}
                topic_time={'42-1 2:30'}
                define={'give me ten json data about book : bookId, bookName, author, image, review, totalPages, rating, category, tags: in an array, publisher, yearOfPublishing'}
            />
            <Blog
                heading={''}
                define={''}
            />
            <Blog
                heading={''}
                define={''}
            />
        </div>
    );
};

export default FakeData;