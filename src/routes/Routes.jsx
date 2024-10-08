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
import CSSNotes from '../pages/CSSNotes/CSSNote';
import EnglishNotes from '../pages/English/EnglishNotes';
import Apply from '../pages/Apply';

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