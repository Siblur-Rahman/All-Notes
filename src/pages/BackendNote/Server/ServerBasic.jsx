import Blog from "../../../shared/Blog";

const ServerBasic = () => {
const  ServerBaciccodes=`
    const express = require('express');
    const app = express();
    const cors = require('cors');
    require('dotenv').config()
    const port = process.env.PORT || 5000;
    
    // middleware
    app.use(cors());
    app.use(express.json());
    const { MongoClient, ServerApiVersion } = require('mongodb');
    `
    const ServerBasiccodes_2 = `
    // Create a MongoClient with a MongoClientOptions object to set the Stable API version
    const client = new MongoClient(uri, {
      serverApi: {
        version: ServerApiVersion.v1,
        strict: true,
        deprecationErrors: true,
      }
    });
    
    async function run() {
      try {
        // Connect the client to the server	(optional starting in v4.7)
        await client.connect();
    
        const menuCollection = client.db("bistroDb").collection("menu");
        const reviewCollection = client.db("bistroDb").collection("reviews");
    
        app.get('/menu', async(req, res) =>{
            const result = await menuCollection.find().toArray();
            res.send(result);
        })
        
        app.get('/reviews', async(req, res) =>{
            const result = await reviewCollection.find().toArray();
            res.send(result);
        })
    
        // Send a ping to confirm a successful connection
        await client.db("admin").command({ ping: 1 });
        console.log("Pinged your deployment. You successfully connected to MongoDB!");
      } finally {
        // Ensures that the client will close when you finish/error
        // await client.close();
      }
    }
    run().catch(console.dir);
    
    
    app.get('/', (req, res) => {
        res.send('boss is sitting')
    })
    `
    return (
        <div>
            <Blog
            topic={'Server Basic Stucture'}
            code={`
               
    `}
            />
            <Blog
            code={''}
            />
<pre className="code">
              {ServerBaciccodes}
              <pre>
              const uri = <span className="text-amber-300">`</span>mongodb+srv://<span className="text-amber-300">$</span><span className="text-blue-500">{'{'}</span>process.env.DB_USER<span className="text-blue-500">{'}'}</span>:<span className="text-blue-500">{'{'}</span>process.env.DB_PASS<span className="text-blue-500">{'}'}</span>@cluster0.ts8x6gb.mongodb.net/?retryWrites=true&w=majority&appName=Cluster0<span className="text-amber-300">`</span>;
              </pre>
              {ServerBasiccodes_2}
            <pre>app.listen(port, () ={'>'} {'{'} <br />
    console.log(<span className="text-amber-300">`</span>Bistro boss is sitting on port 
    {/* Doller */}
    <span className="text-amber-300">$</span>
    {/* CurlyBraket Open */}
    <span className="text-blue-500">{'{'}</span> port
    {/* CurlyBraket Close */}
    <span className="text-blue-500">{'}'}</span>
    {/* Backtick*/}
    <span className="text-amber-300">`</span>;
    <br />
{'}'})</pre>
            </pre>
        </div>
    );
};

export default ServerBasic;