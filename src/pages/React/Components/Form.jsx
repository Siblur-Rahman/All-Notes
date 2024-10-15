import Blog from "../../../shared/Blog";

const Form = () => {
    return (
        <div className="to_jump" id="Form">
            <div className="topic-border">
                <Blog
                    topic={'Form'}
                    topic_time={'46-6'}
                    topic_timeURL={'https://web.programming-hero.com/web-9/video/web-9-46-2-form-with-state-to-get-value-and-set-default-value'}
                />
                <div className="topic-border">
                    <Blog
                    topic={'React Hook Form'}
                    url={`https://react-hook-form.com`}
                    topic_time={'66-5 1:45, 69-2 10:00'}
                    npmCode={'npm install react-hook-form'}
                    />
                </div>
                <h2>Some Form</h2>
                1. Formik
            </div>
        </div>
    );
};

export default Form;