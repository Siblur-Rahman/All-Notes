import Blog from "../../shared/Blog";

const AxiosInterceptors = () => {
    return (
        <div>
            <Blog
            id={'Axios Interceptors'}
            codes={[`
                import axios from "axios";



export const axiosSecure = axios.create({
    baseURL:backtick dollar {import.meta.env.VITE_API_URL} backtick
});


const useAxiosSecure = () => {
    axiosSecure.interceptors.request.use(function(config){
        const token = localStorage.getItem('access-token');
        console.log('test', token);
        config.headers.authorization = backtick Bearer dollar {token}backtick 
        return config;
    }, function (error) {
        // Do something with request error
        return Promise.reject(error);
      })

    return axiosSecure;
};

export default useAxiosSecure;
                `]}
            />
        </div>
    );
};

export default AxiosInterceptors;