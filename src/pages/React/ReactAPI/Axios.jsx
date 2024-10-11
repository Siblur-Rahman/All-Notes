import Blog from "../../../shared/Blog";

const Axios = () => {
    return (
        <>
        <div className="Axios topic-border">
            <Blog
            topic={'Axios'}
            npmCode={'npm install axios'}
            url={'https://axios-http.com/docs/intro'}
            />
        </div>
        <div className="Axios Instance">
            <Blog 
            topic={'Axios Instance'}
            topic_time={'68-1 7:45'}
            url={'https://axios-http.com/docs/instance'}
            code={`
import axios from "axios";

const axiosPublic = axios.create({
baseURL: import.meta.env.VITE_API_URL
})

const useAxiosPublic = () => {
return axiosPublic;
};

export default useAxiosPublic;
            `}
            />
        </div>
    </>
    );
};

export default Axios;