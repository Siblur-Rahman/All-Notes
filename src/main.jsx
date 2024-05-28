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
        path:"/backend",
        element: <Backend/>,
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
