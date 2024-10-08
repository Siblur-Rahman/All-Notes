
const FakeAPI = () => {
    const APIs =[
        {
            title:'json Placeholder',
            link:'https://jsonplaceholder.typicode.com'
        },
        {
            title:'Rest Countries',
            link:'https://restcountries.com/'
        },
        // {
        //     title:'',
        //     link:''
        // },
    ]
    return (
        <div className="topic-border Some Fake API">
            {APIs.map((api, index) => <h2 key={index}><span className="text-yellow-500">{api.title} :</span> <a href={api.link} target="_blank">Click Me to go Site</a></h2>)}
        </div>
    );
};

export default FakeAPI;