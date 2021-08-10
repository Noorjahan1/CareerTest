import React from 'react';
import "./navbar.css"
const Nav = () => {
    return ( 
        <>
        <nav className="navbar navbar-expand-lg navbar-light container">
  <a className="navbar-brand" href="#"><img src="assets/logo.png"/></a>
  <button className="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span className="navbar-toggler-icon"></span>
  </button>

  <div className="collapse navbar-collapse" id="navbarSupportedContent">
    <ul className="navbar-nav mr-auto ml-5">
      <li className="nav-item">
        <a className="nav-link" href="#">Home </a>
      </li>
      <li className="nav-item">
        <a className="nav-link" href="#">Property</a>
      </li>
      <li className="nav-item">
        <a className="nav-link" href="#">Service</a>
      </li>
      <li className="nav-item">
        <a className="nav-link" href="#">About Us</a>
      </li>
      <li className="nav-item">
        <a className="nav-link" href="#">Contact Us</a>
      </li>
    </ul>

  </div>
  <div className="my-lg-0">
        <ul className="navbar-nav ">
            <li className="nav-item">
                <a href="#" className="nav-link"><i className="fa fa-shopping-cart" aria-hidden="true"></i></a>
            </li>
            <li className="nav-item">
                <a href="#" className="nav-link">  <i className="fa fa-bell" aria-hidden="true"></i></a>
            </li>
            <li className="nav-item">
                <a href="#" className="nav-link"><img src="assets/propic.png"/></a>
            </li>
        </ul>
      
    </div>
</nav>
        </>
     );
}
 
export default Nav;