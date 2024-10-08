import Blog from "../../../shared/Blog";

const Selector = () => {
    return (
        <div className="selector" id="">
            <div className="topic-border">
                <Blog
                    topic={'CSS Selector'}
                    url={'https://www.w3schools.com/cssref/css_selectors.php'}
                />
                <Blog
                    topic={'select placeholde'}
                    codes={['::placeholder', 'input::placeholder']}
                />
            </div>
            
        </div>
    );
};

export default Selector;