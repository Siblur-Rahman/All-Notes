const themeCode =`
const [theme, setTheme] = useState(localStorage.getItem("theme") ? localStorage.getItem("theme") : "light");
const handleToggle = (e) =>{
    if(e.target.checked){
        setTheme("dark");
    }else{
        setTheme("light")
    }
}
useEffect(()=>{
    localStorage.setItem("theme", theme);
    const localTheme = localStorage.getItem("theme");
    document.querySelector("html").setAttribute("data-theme", localTheme);
},[theme])
`
const Theme = () => {
    return (
        <div className="to_jump" id="Theme">
            <pre className="code">
                {themeCode}
            </pre>
            <h2 className="heading">We can use swap toggle Butto from <a href="https://daisyui.com/components/swap/" target="_blank">Here</a></h2>
            <pre className="code">
            </pre>
        </div>
    );
};

export default Theme;