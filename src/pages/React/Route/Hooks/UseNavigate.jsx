import Blog from "../../../../shared/Blog";


const UseNavigate = () => {
    return (
        <div className="topic-border useNavitate">
        <Blog
            topic={'useNavitate'}
            topicURL={'https://reactrouter.com/en/main/hooks/use-navigate'}
            fileName={'FoodCart.jsx'}
            code={
    `
    import { useLocation, useNavigate } from 'react-router-dom';
    let location = useLocation();
    navigate("/login", { state: { from: location }});
    `
            }
            />
            <Blog
            fileName={'Login.jsx'}
            code={
    `
   import {useLocation, useNavigate } from 'react-router-dom';
    const navigate = useNavigate();
    const location = useLocation()
    
    const from = location.state?.from?.pathname || "/";
    navigate(from, { replace: true });
    `
            }
            />
            
        </div>
    );
};

export default UseNavigate;