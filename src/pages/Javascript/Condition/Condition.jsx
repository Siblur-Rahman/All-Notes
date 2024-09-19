
import Blog from './../../../shared/Blog';
import NestedCondition from './NestedCondition';
const Condition = () => {
    return (
        <div className="topic-border">
            <Blog
                id={'JS Condition'}
            />
            <Blog
                id={'Class add on Odd number'}
                codes={["codes?.map((code, index) =>","<div className={`${index%2 && 'code-highlight' }`}>{code}</div>)"]}
            />
            <NestedCondition/>
        </div>
    );
};

export default Condition;