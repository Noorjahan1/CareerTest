import React ,{ useState } from 'react';
import "./banner.css"
const Banner = () => {
    const [search, setSearch] = useState("Address/Area");
    const searchOption=(option)=>{
        switch (option) {
            case "Rent":
                setSearch("Rent")
                break;
            case "Sale":
                setSearch("Sale")
                break;
            case "Service":
                setSearch("Service")
                break;
            default:
                
                break;
        }
    }
   
    return (
     <>
     <div className="banner container p-5">
         <div className="banner-text">
             <h3>greeho.com</h3>
             <p>Your local real State Professional</p>
         </div>
         <div className="SearchOptions">
             <a href="#" onClick={()=>{searchOption("Rent")}}>Rent</a>
             <a href="#" onClick={()=>{searchOption("Sale")}}>Sale</a>
             <a href="#"  onClick={()=>{searchOption("Service")}}>Service</a>
         </div>
         <div className="banner-form">
             <input type="text" placeholder={`Search By ${search}`}>
             </input>
             {search=="Service"?<i class="fa fa-bars" aria-hidden="true"></i>: <i className="fa fa-search" aria-hidden="true"></i>}
            
         </div>
         <div className="Ad">
             <a href="#">Post Your Ad</a>
         </div>
   
     </div>
     <div className="banner-options container">
             <div className="row">
                 <div className="col-lg-3 ">
                     <div className="row">
                         <div className="col-lg-6">
                             <div className="ban-image">
                                 <img src="assets/homeService.jpg"/>
                             </div>
                         </div>
                         <div className="col-lg-6">
                             <div className="ban-text">
                                 <h3>Find Your Dream Home</h3>
                             </div>
                         </div>
                     </div>
                     <div className="ban-paragraph">
                         <p>We provide Various types of house</p>
                     </div>
                 </div>
                 <div className="col-lg-3">
                     <div className="row">
                         <div className="col-lg-6">
                             <div className="ban-image">
                                 <img src="assets/homeService.jpg"/>
                             </div>
                         </div>
                         <div className="col-lg-6">
                             <div className="ban-text">
                                 <h3>Find Your Dream Home</h3>
                             </div>
                         </div>
                     </div>
                     <div className="ban-paragraph">
                         <p>We provide Various types of house</p>
                     </div>
                 </div>
                 <div className="col-lg-3">
                     <div className="row">
                         <div className="col-lg-6">
                             <div className="ban-image">
                                 <img src="assets/homeService.jpg"/>
                             </div>
                         </div>
                         <div className="col-lg-6">
                             <div className="ban-text">
                                 <h3>Find Your Dream Home</h3>
                             </div>
                         </div>
                     </div>
                     <div className="ban-paragraph">
                         <p>We provide Various types of house</p>
                     </div>
                 </div>
                 <div className="col-lg-3">
                     <div className="row">
                         <div className="col-lg-6">
                             <div className="ban-image">
                                 <img src="assets/homeService.jpg"/>
                             </div>
                         </div>
                         <div className="col-lg-6">
                             <div className="ban-text">
                                 <h3>Find Your Dream Home</h3>
                             </div>
                         </div>
                     </div>
                     <div className="ban-paragraph">
                         <p>We provide Various types of house</p>
                     </div>
                 </div>
             </div>
         </div>
         
    </>
     );
}
 
export default Banner;