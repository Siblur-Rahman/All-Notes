import Blog from "../../../Shared/Blog";

const GetApi = () => {
    return (
        <div className="topic-border">
            <Blog
                id={'Get API'}
            />
            <Blog
                topic={'Get API with fetch'}
                code={`
    useEffect(()=>{
        fetch('doller{import.meta.env.VITE_API_URL}/items')
        .then(res=>res.json())
        .then(data=>{
            setItems(data)
        })
    },[items])
                    `}
            />
            <Blog
            fileName={'cliend-site'}
                topic={'Get API with fetch'}
                code={`
    const [item, setItem] = useState([])
    const {id} = useParams();
useEffect(()=>{
    fetch('doller{import.meta.env.VITE_API_URL}/item/doller{id}')
    .then(res=>res.json())
    .then(data=>{
        setItem(data)
    })
}, [])
                    `}
            />
            <Blog
            fileName={'cliend-site'}
                topic={'Get API with Axios'}
                code={`
    const [item, setItem] = useState([])
    const {id} = useParams();
  useEffect(()=>{
     const getData = async() =>{
        const {data} = await axios('doller{import.meta.env.VITE_API_URL}/item/doller{id}')
        setItem(data)
     };
     getData()
    })
                    `}
            />
            <Blog
            fileName={'cliend-site'}
                topic={'Link'}
                code={`
            <Link to={'/updateitem/doller{item._id}'}><button>Update</button></Link>
                    `}
            />
        </div>
    );
};

export default GetApi;