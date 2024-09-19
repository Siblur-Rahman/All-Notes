import { createBrowserRouter } from 'react-router-dom'
import Main from '../layouts/Main'
import Tools from './../pages/Tools/Tools';
import Notes from '../pages/Notes'
import Home from '../pages/Home'
import ErrorPage from '../pages/ErrorPage'
import ReactNote from '../pages/React/ReactNote';
import BackendNotes from '../pages/BackendNote/BackendNotes';
import JavasctiptNotes from '../pages/Javascript/JavasctiptNotes';
import FolderNotes from '../pages/_folder/FolderNote';
import Authentication from '../pages/Authentication/Authentication';
import HowTo from '../pages/HowTio/HowTo';

const router = createBrowserRouter([
  {
    path: '/',
    element: <Main />,
    errorElement: <ErrorPage />,
    children: [
      {
        path:'/',
        element:<Home/>
      },
      {
        path:'/react',
        element:<ReactNote/>
      },
      {
        path:'/backend',
        element:<BackendNotes/>
      },
      {
        path:'/authentication',
        element:<Authentication/>
      },
      {
        path:'/javascript',
        element:<JavasctiptNotes/>
      },
      {
        path:'tools',
        element:<Tools/>
      },
      {
        path:'/folder',
        element:<FolderNotes/>
      },
      {
        path:'howto',
        element:<HowTo/>
      },
      // {
      //   path:'',
      //   element:
      // },
    ]
  }
])

export default router