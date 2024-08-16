import React from 'react'
import ReactDOM from 'react-dom/client'
import {
  createBrowserRouter,
  RouterProvider,
} from "react-router-dom";
import './index.css'
import Home from './pages/Home';
import Javascript from './pages/Javascript/Javascript';
import CodeProvider from './CodeProvider';
import ReactNote from './pages/React/ReactNote';
import Tools from './pages/Tools/Tools';
import Backend from './pages/Backend/Backend';
import NextJSNotes from './pages/NextJS/NextJSNotes';
import Job from './pages/Job/Job';
import PHero from './pages/P-Hero/PHero';
// import File from './pages/file/File';
const router = createBrowserRouter([
  {
    path: "/",
    element: <Home/>,
    children: [
      {
        path:"/phero",
        element: <PHero/>,
      },
      {
        path:"/Javascript",
        element: <Javascript/>,
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
      // {
      //   path:"/file",
      //   element: <File/>,
      // },
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
