import Blog from "../../../shared/Blog";

const Icon = () => {
    return (
    <div className="to_jump" id="Icons">
            <div className="topic-border">
            <Blog
            topic={'Icons'}
            url={'https://react-icons.github.io/react-icons'}
            npmCode={'npm install react-icons --save'}
            />
            <Blog
            topic={'Shopping Cart'}
            code={`
import { FaShoppingCart } from "react-icons/fa";
<FaShoppingCart />
            `}
            />
        </div>
    </div>
    );
};

export default Icon;