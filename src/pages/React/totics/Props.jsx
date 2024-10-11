import Blog from "../../../shared/Blog";
import Details from "../../../shared/Details";

const PropsReact = () => {
    return (
        <div>
            <div className="Props">
                <Blog
                    heading={'React Props'}
                    define={<>
Props stand for <span className="text-highlight">"Properties."</span> They are read-only components. It is an object which stores the value of attributes of a tag and work similar to the HTML attributes. It gives a way to pass data from one component to other components. It is similar to function arguments. Props are passed to the component in the same way as arguments passed in a function.
<br /><br />
Props are <span className="text-highlight">immutable</span> so we cannot modify the props from inside the component. Inside the components, we can add attributes called props.<Details details={'https://www.javatpoint.com/react-props'}/>
                    </>}
                />
            </div>
            <div className="PropType topic-border">
                <Blog
                topic={'React Props-Types'}
                npmCode={'Install: npm i prototype'}
                url={'https://www.npmjs.com/package/prop-types'}
                code={
                    `
    import PropTypes from 'prop-types';

    const Component = ({prop-1, prop-2}) => {
    return (

    <div > </div>
    );
    };
    Component.propTypes = {
    prop-1: PropTypes.object.isRequired,
    prop-2: PropTypes.func.isRequired
    }
    export default Component;
                    `
                }
                />
                <Blog
                topic={'ignore PropType'}
                fileName={'.eslintrc.cjs'}
                code={'node: true'}
                />   
                <Blog
                topic={'off PropType'}
                fileName={'.eslintrc.cjs'}
                code={`
"rules": {
"react/prop-types": ["off"]
}
                    `}
                />   

                <Blog
                    heading={'prop Type Validation'}
                    npmCode={'Install: npm i prototype'}
                    code={`
                        
const Component = ({prop-1, prop-2, prop-3, prop-4}) => {
return (
        <div > 

        </div>
    );
    };

    Component.propTypes = {
    prop-1: PropTypes.object.isRequired,
    prop-2: PropTypes.func.isRequired,
    prop-3: PropTypes.array,
    prop-4: PropTypes.number,

    }
    export default Component;
                        `}
                /> 
        </div>

        </div>
    );
};

export default PropsReact;