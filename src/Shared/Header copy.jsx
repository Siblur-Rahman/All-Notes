
// import { useContext } from "react";
import {Link, NavLink, useLocation } from "react-router-dom";
// import { AuthContext } from '../providers/AuthProvider';
import useAuth from "../hooks/useAuth";

const Header = () => {
        const {pathname} = useLocation()
        const {user, logOut} = useAuth()

        const handleLogOut = () =>{
            logOut()
        }
        const links = [
          {
            title:'Home',
            path:'/'
          },
          {
            title:'CSS',
            path:'/css'
          },
          {
            title:'HTML',
            path:'/html'
          },
          {
            title:'Authentication',
            path:'/authentication'
          },
          {
            title:'JavaScript',
            path:'/javascript'
          },
          {
            title:'React',
            path:'/react'
          },
          {
            title:'Backend',
            path:'/backend'
          },
          {
            title:'Tools',
            path:'/tools'
          },
          {
            title:'Folder',
            path:'/folder'
          },
          {
            title:'How To',
            path:'/howto'
          },
          // {
          //   title:'',
          //   path:'/'
          // },
        ]
const navOption = 
<div className="flex justify-evenly">
                 { links.map((link, index) => <li className={`${pathname === link.path && 'bg-red-600  rounded-lg' }`}><Link  to={link.path}>{link.title}</Link></li>)}
</div>
    return (
<div className="navbar bg-black fixed top-0 z-10 h-[40px] min-h-10">
  <div className="navbar-start">
    <div className="dropdown">
      <div tabIndex={0} role="button" className="btn btn-ghost lg:hidden text-white">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          className="h-5 w-5"
          fill="none"
          viewBox="0 0 24 24"
          stroke="currentColor">
          <path
            strokeLinecap="round"
            strokeLinejoin="round"
            strokeWidth="2"
            d="M4 6h16M4 12h8m-8 6h16" />
        </svg>
      </div>
      <ul
        tabIndex={0}
        className="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
{/* <nav> */}
    {/* {navOption} */}
    { links.map((link, index) => <li className={`${pathname === link.path && 'bg-red-600  rounded-lg'} text-black`}><Link  to={link.path}>{link.title}</Link></li>)}
{/* </nav> */}
      </ul>
    </div>
    <a className="mr-4 btn btn-ghost text-xl text-white inline-block leading-10">Programming Notes</a>
  </div>
  <div className="navbar-center hidden lg:flex">
    <ul className="menu menu-horizontal px-1  text-white ml-10">
      {/* {navOption} */}
      { links.map((link, index) => <li className={`${pathname === link.path && 'bg-red-600  rounded-lg' }`}><Link  to={link.path}>{link.title}</Link></li>)}
    </ul>
  </div>
  <div className="navbar-end">
  <div className={`dropdown dropdown-end ${!user && 'hidden'}`}>
      <div tabIndex={0} role="button" className="btn btn-ghost btn-circle avatar">
        <div className="w-10 rounded-full">
          <img
            alt="Tailwind CSS Navbar component"
            src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
        </div>
      </div>
      <ul
        tabIndex={0}
        className="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
        <li>
          <a className="justify-between">
            Profile
            <span className="badge">New</span>
          </a>
        </li>
        <li><a>Settings</a></li>
        <li><a onClick={handleLogOut}>Sign out</a></li>
      </ul>
    </div>
  </div>
</div>
    );
};

export default Header;