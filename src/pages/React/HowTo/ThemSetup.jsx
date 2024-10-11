import Blog from "../../../shared/Blog";

const ThemSetup = () => {
    return (
    <div>
        <div className='Theme Setup topic-border'>

        <Blog
            topic={'Them Setup'}
            topic_time={'CS-8 p-1 28:00-40:00 recape 44:00'}
            topic_timeURL={'https://web.programming-hero.com/conceptual-session'}
            code={
`module.exports = {
  //...
  daisyui: {
    themes: ["light", "dark", "cupcake"],
  },
}  
`
                }
        />
        <div className="bg-highlight">
            It have to DaigyUI and Search 'Theme Contoler' to get 'Theme Contoler Button'
        </div>
        </div>
    </div>
    );
};

export default ThemSetup;