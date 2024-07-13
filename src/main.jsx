import React from 'react'
import ReactDOM from 'react-dom/client'
import {
  createBrowserRouter,
  RouterProvider,
} from "react-router-dom";
import './index.css'
import Home from './pages/Home';
import JavaScript from './pages/JavaScript/JavaScript';
import CodeProvider from './CodeProvider';
import ReactNote from './pages/React/ReactNote';
import Tools from './pages/Tools/Tools';
import Backend from './pages/Backend/Backend';
import NextJSNotes from './pages/NextJS/NextJSNotes';
import Job from './pages/Job/Job';
import File from './pages/file/File';
const router = createBrowserRouter([
  {
    path: "/",
    element: <Home/>,
    children: [
      {
        path:"/JavaScript",
        element: <JavaScript/>,
      },
      {
        path:"/tools",
        element: <Tools/>,
      },
      {
        path:"/react",
        element: <ReactNote/>,
      },
      {
        path:'/nextjs',
        element:<NextJSNotes/>
      },
      {
        path:"/backend",
        element: <Backend/>,
      },
      {
        path:"/job",
        element: <Job/>,
      },
      {
        path:"/file",
        element: <File/>,
      },
    ]
  },
]);

ReactDOM.createRoot(document.getElementById('root')).render(
  <React.StrictMode>
    <CodeProvider>
      <RouterProvider router={router} />
    </CodeProvider>
  </React.StrictMode>,
)
