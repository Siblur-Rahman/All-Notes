import Blog from "../../../shared/Blog";

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
            <Blog
                fileName={'server'}
                code={`
app.put('/updateItem/:id', async (req, res) => {
    const id = req.params.id;
    const itemData = req.body;
    const query = { _id: new ObjectId(id) };
    const data = {
    $set:{
        // item_title:req.body.item_title
        ...itemData
    }
    }
    const result = await itemsCollection.updateOne(query, data)
res.send(result)
})
                    `}
            />
            <Blog
            topic={'Extra Api with option'}
            fileName={'server'}
            code={`
    // update a blog in db
    app.put('/blog/:id', async (req, res) => {
      const id = req.params.id
      const blogData = req.body
      console.log(blogData)
      const query = { _id: new ObjectId(id) }
      const options = { upsert: true }
      const updateDoc = {
        $set: {
          ...blogData,
        },
      }
      const result = await blogsCollection.updateOne(query, updateDoc, options)
      res.send(result)
    })
                `}
            />
        </div>
    );
};

export default PutApi;