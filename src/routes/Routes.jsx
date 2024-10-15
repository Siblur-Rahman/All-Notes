import { createBrowserRouter } from 'react-router-dom'
import Main from '../layouts/Main'
import Tools from './../pages/Tools/Tools';
import Home from '../pages/Home'
import ErrorPage from '../pages/ErrorPage'
import BackendNotes from '../pages/BackendNote/BackendNotes';
import JavasctiptNotes from '../pages/Javascript/JavasctiptNotes';
import FolderNotes from '../pages/_folder/FolderNote';
import Authentication from '../pages/Authentication/Authentication';
import HowTo from '../pages/HowTio/HowTo';
import EnglishNotes from '../pages/English/EnglishNotes';
import Apply from '../pages/Apply';
import CSSNotes from '../pages/CSSNotes/_CSSNote';
import ReactNote from './../pages/React/_ReactNote/ReactNote';

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
        path:'/apply',
        element:<Apply/>
      },
      {
        path:'/css',
        element:<CSSNotes/>
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
        path:'english',
        element:<EnglishNotes/>
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