import Blog from "../../../Shared/Blog";

const Form = () => {
    return (
        <div>
            <Blog
            topic={'Form'}
            />
            <Blog
            topic={'React Hook Form'}
            url={`https://react-hook-form.com`}
            time={'66-5 1:45'}
            npmCode={'npm install react-hook-form'}
            />
            <h2>Some Form</h2>
            1. Formik
        </div>
    );
};

export default Form;