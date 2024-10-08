import Blog from "../../../shared/Blog";

const TemplateString = () => {
    return (
        <div className="Template String">
            <Blog
                topic={'String Templates'}
                url={'https://www.tutorialspoint.com/javascript/javascript_template_literals.htm'}
            />
            <h2 className="bg-zinc-500 p-4">
                String Templates <br />
                Template Strings <br />
                Template Literals
            </h2>
        </div>
    );
};

export default TemplateString;