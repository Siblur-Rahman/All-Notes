import Blog from "../../../Shared/Blog";

const PutApi = () => {
    return (
        <div className="topic-border">
            <Blog id={'Put API'}/>
            <Blog topic={'Put with Fetch'}
            fileName={'client-site'}
            code={`
fetch('doller{import.meta.env.VITE_API_URL}/updateItem/doller{id}',{
    method: "PUT",
    headers:{"Content-type": "application/json"},
    body:JSON.stringify(itemData)
})
.then(res=>res.json())
.then(data=>{
    console.log(data)
    if(data?.modifiedCount>0){
        toast.success('Item Data Update Successfully!')
        navigate('/crud-fetch')
    }
})
                `}
            />
            <Blog
            topic={'Put with Axios'}
            code={`
try{
    const {data} = await axios.put('doller{import.meta.env.VITE_API_URL}/updateItem/doller{id}',
        itemData
    )
    if(data?.modifiedCount>0){
                toast.success('Item Data Update Successfully!')
                navigate('/crud-fetch')
            }
}
catch(err){
    console.log(err)
}

}
                `}
            />
        </div>
    );
};

export default PutApi;