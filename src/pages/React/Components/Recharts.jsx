import Blog from "../../../shared/Blog";

const Recharts = () => {
    return (
        <div className="to_jump" id="Recharts">
            <div className="topic-border">
                <Blog
                    topic={'Recharts'}
                    topic_time={'71-7 7:05'}
                    url={'https://web.programming-hero.com/web-9/video/web-9-71-7-optional-display-custom-bar-chart-and-custom-pie-chart'}
                    npmCode={'npm install recharts'}
                />
                <Blog
                topic={'CustomShapeBarChart'}
                topic_time={'71-7 7:37'}
                url={'https://web.programming-hero.com/web-9/video/web-9-71-7-optional-display-custom-bar-chart-and-custom-pie-chart'}
                />
                <Blog
                topic={'PieChartWithCustomizedLabel'}
                topic_time={'71-7 10:55'}
                url={'https://web.programming-hero.com/web-9/video/web-9-71-7-optional-display-custom-bar-chart-and-custom-pie-chart'}
                />
            </div>
            
        </div>
    );
};

export default Recharts;