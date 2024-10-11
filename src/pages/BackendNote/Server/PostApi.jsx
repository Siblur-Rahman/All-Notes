import Blog from "../../../shared/Blog";

const PostApi = () => {
    return (
        <div className="topic-border">
          <Blog
            id={"Post API"}
            topic={"Post API"}
            topic_time={'MSote-10 1st day p-1'}
          /> 
          <Blog
          fileName={'client-site'}
          topic={'Post with fetch'}
        code={`
    fetch('doller{import.meta.env.VITE_API_URL}/blog',{
    method: "POST",
    headers:{"Content-type": "application/json"},
    body:JSON.stringify(blogData)
    })
    .then(res=>res.json())
    .then(data=>{
        console.log(data)
        if(data?.insertedId){
            toast.success('Blog Data added Successfully!')
        }
    })
            `}
          /> 
          <Blog
          topic={'Post with Axios'}
          code={`
        try {
          const { data } = await axios.post('doller{import.meta.env.VITE_API_URL}/itemwishlist',
            itemwishlistData
          )
          console.log(data)
          if(data.insertedId!==null){
            toast.success('Added to wishlist Successfully!')
            // navigate('/wishlist/doller{email}')
          }
          if(data.insertedId==null){
            toast.success('null!')
          }
        } catch (err) {
          navigate('/login')
          console.log(err)
        }
            `}
          />
          <Blog
          topic={'post with hook as useAxiosPablic'}
          topic_time={'PracticAll component/Item.jsx'}
          code={`
  const axiosPublic = useAxiosPublic()
    try{
      axiosPublic.post('/itemwishlist',
        itemwishlistData
      )
      .then(res=>{
        console.log(res.data)
        if(res.data.insertedId!==null){
    toast.success('Added to wishlist Successfully!')
    // navigate('/wishlist/doller{email}')
  }
  if(res.data.insertedId==null){
    toast.success('null!')
  }
      })
     } catch (err) {
          navigate('/login')
          console.log(err)
        }
            `}
          />
          <Blog
          fileName={'server-site'}
          code={`
app.post('/blog', async (req, res) => {
const blogData = req.body
const result = await blogsCollection.insertOne(blogData)
res.send(result)
})
            `}
          />
          <Blog
          fileName={'server-site'}
          topic={'Post With Condition'}
          code={`
        app.post('/user', async (req, res) => {
          const userData = req.body
          const query = { email/'email'/'user.email': userData.email, other condition };
          const existingUser = await usersCollection.findOne(query);
          if (existingUser) {
            return res.send({ message: "user already exists", insertedId: null });
          }
          const result = await usersCollection.insertOne(userData)
          res.send(result)
        })
            `}
          />
        </div>
    );
};

export default PostApi;