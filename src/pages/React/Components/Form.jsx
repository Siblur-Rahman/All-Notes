import Blog from "../../../shared/Blog";

const Form = () => {
    return (
        <div className="to_jump" id="Form">
            <div className="topic-border">
                <Blog
                id={'Form'}
                />
                <Blog
                topic={'React Hook Form'}
                url={`https://react-hook-form.com`}
                topic_time={'66-5 1:45, 69-2 10:00'}
                npmCode={'npm install react-hook-form'}
                />
                <h2>Some Form</h2>
                1. Formik
            </div>
        </div>
    );
};

export default Form;