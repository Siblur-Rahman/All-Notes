import Blog from "../../../Shared/Blog";

const Recaptcha = () => {
    return (
        <div>
            <Blog
                topic={'Recaptcha'}
                url={"https://www.npmjs.com/package/react-google-recaptcha"}
                time={"66-2 00:00)"}
                npmCode={"npm install --save react-google-recaptcha"}
            />

            <Blog
                code={`
    const handleValidateCaptcha = (e) => {
        const user_captcha_value = e.target.value;
        if (validateCaptcha(user_captcha_value)) {
            setDisabled(false);
        }
        else {
            setDisabled(true)
        }
    }
                `}
            />
            <Blog
            code={`
<div className="form-control">
    <label className="label">
        <LoadCanvasTemplate />
    </label>
    <input onBlur={handleValidateCaptcha} type="text" name="captcha" placeholder="type the captcha above" className="input input-bordered" />

</div>
<div className="form-control mt-6">
    <input disabled={disabled} className="btn btn-primary" type="submit" value="Login" />
</div>
            `}
            />
        </div>
    );
};

export default Recaptcha;