
@extends('layouts.app')
@section('content')
    <div class="main">
       
        <div class="categoryBg">
        <div class="container">
            <div class="breadcrumbMain">
                <div class="breadcrumbInner">
                    <a href="#!">Home <i class="bi bi-chevron-right"></i></a>
                    <!-- <a href="#!">Product Name <i class="bi bi-chevron-right"></i></a> -->
                    <a href="#!">My Profile </a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12 px-2">
                    <div class="my-accountMenus">
                        <div class="accountMenusLink">
                            <ul>
                                <li><a href="{{route('user.profile')}}" class="Pactive"><i class="bi bi-person"></i> My Profile</a></li>
                                <li><a href="#!" class="Pactive"><i class="bi bi-box-seam"></i> My Orders</a></li>
                                <li><a href="#!" class="Pactive"><i class="bi bi-heart"></i> My Wishlist</a></li>
                                <li><a href="{{route('user.logout')}}" class="Pactive"><i class="bi bi-power"></i> Log Out</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-12 px-2">
                    <div class="profileBxmain">
                        <div class="profileInnerCard" style="background-image: url('./assets/images/pro-bg.jpg');">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-lg-6 col-md-6 col-sm-12 profileSmallCard">
                                        <div class="align-items-center row">
                                            <div class="col-lg-4 col-sm-3 px-2">
                                                <div class="profileImgBx">
                                                    <img src="assets/images/abt.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-sm-9 px-2">
                                                <div class="profileInfobx">
                                                    <button class="btn profileInfobxedit"  data-toggle="modal" data-target="#exampleprofileModalCenter">
                                                        <i class="bi bi-pencil"></i> Edit
                                                    </button>
                                                    <p class="Pname">Mr.{{auth()->user()->name}}</p>
                                                    <p class="Pemail"><i class="bi bi-envelope"></i>{{auth()->user()->email}}</p>
                                                    <p class="Pcontact"><i class="bi bi-telephone"></i>Mr.gautam</p>
                                                    <p class="Pdob"><i class="bi bi-calendar"></i>dd/mm/yyyy</p>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="profileAddressCard">
                            <div class="profileAddressCardinner">
                                <div class="profileAddressCardhead">
                                    <div class="row justify-content-between align-items-center">
                                        <div class="col-lg-6 px-2">
                                            <h3><i class="bi bi-house-door"></i> My Addresses</h3>
                                        </div>
                                        <div class="col-lg-6 px-2">
                                            <div class="text-right">
                                                <button class="btn profileAddressadd" data-toggle="modal" data-target="#exampleaddModalCenter">
                                                    <i class="bi bi-plus-lg"></i> Add New Address
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="profileaddCardmain">
                                    <div class="row">
                                        <div class="col-md-6 pr-1 pl-1">
                                            <div class="add-address-box-addres p-3">
                                                <div class="address-name">
                                                    <h5>Mr. Gautam</h5>
                                                    <p>1245 neemrana, Rajasthan</p>
                                                    <p>Neemrana-301714</p>
                                                    <p>9999XXXXXX</p>
                                                </div>
                                                <div class="d-flex gap-10 justify-content-end mt-0">
                                                    <button class="btn addEditcard" data-toggle="modal" data-target="#exampleaddModalCenter"><i class="bi bi-pencil"></i> Edit</button>
                                                    <button class="btn addDeletecard"><i class="bi bi-trash"></i> Delete</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 pr-1 pl-1">
                                            <div class="add-address-box-addres p-3">
                                                <div class="address-name">
                                                    <h5>Mr. Gautam</h5>
                                                    <p>1245 neemrana, Rajasthan</p>
                                                    <p>Neemrana-301714</p>
                                                    <p>9999XXXXXX</p>
                                                </div>
                                                <div class="d-flex gap-10 justify-content-end mt-0">
                                                    <button class="btn addEditcard" data-toggle="modal" data-target="#exampleaddModalCenter"><i class="bi bi-pencil"></i> Edit</button>
                                                    <button class="btn addDeletecard"><i class="bi bi-trash"></i> Delete</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 pr-1 pl-1">
                                            <div class="add-address-box-addres p-3">
                                                <div class="address-name">
                                                    <h5>Mr. Gautam</h5>
                                                    <p>1245 neemrana, Rajasthan</p>
                                                    <p>Neemrana-301714</p>
                                                    <p>9999XXXXXX</p>
                                                </div>
                                                <div class="d-flex gap-10 justify-content-end mt-0">
                                                    <button class="btn addEditcard" data-toggle="modal" data-target="#exampleaddModalCenter"><i class="bi bi-pencil"></i> Edit</button>
                                                    <button class="btn addDeletecard"><i class="bi bi-trash"></i> Delete</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 pr-1 pl-1">
                                            <div class="add-address-box-addres p-3">
                                                <div class="address-name">
                                                    <h5>Mr. Gautam</h5>
                                                    <p>1245 neemrana, Rajasthan</p>
                                                    <p>Neemrana-301714</p>
                                                    <p>9999XXXXXX</p>
                                                </div>
                                                <div class="d-flex gap-10 justify-content-end mt-0">
                                                    <button class="btn addEditcard" data-toggle="modal" data-target="#exampleaddModalCenter"><i class="bi bi-pencil"></i> Edit</button>
                                                    <button class="btn addDeletecard"><i class="bi bi-trash"></i> Delete</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- Fixcart -->
        <section class="fixedCart">
            <div class="row mr-0 justify-content-end">
                <div class="col-lg-4 px-0">
                    <div class="fixedCartMain position-relative">
                        <div class="fixedCartInner ">
                            <div class="cartCalcmainbx">
                            <div class="fixCartHead">
                                <h2>Shopping Cart</h2>
                                <a class="fxCloseCart pointer text-decoration-none text-dark"><i class="bi bi-x-lg"></i></a>
                            </div>
                            <div class="fixCartproductsmain">
                                <div class="fixCartproductslist">
                                    <div class="fixCartproductscard">
                                        <div class="fixCartimgcol">
                                            <div class="fixCartimg">
                                                <img src="assets/images/product.avif" alt="">
                                            </div>
                                        </div>
                                        <div class="fixCartinfo">
                                            <a href="#!">SP Luxe Oil Keratin Restore Mask</a>
                                            <div class="fixCartqty">
                                               <span>Qty: </span>
                                                <div class="cartQtybx">
                                                    <button class="Qtybtn"><i class="bi bi-dash-lg"></i></button>
                                                    <input type="text" value="1">
                                                    <button class="Qtybtn"><i class="bi bi-plus-lg"></i></button> 
                                                </div>
                                            </div>
                                            <span class="fixCartprice">₹1663</span>
                                            <button class="fixCartDelete"><i class="bi bi-trash"></i></button>
                                        </div>
                                    </div>
                                    <div class="fixCartproductscard">
                                        <div class="fixCartimgcol">
                                            <div class="fixCartimg">
                                                <img src="assets/images/product.avif" alt="">
                                            </div>
                                        </div>
                                        <div class="fixCartinfo">
                                            <a href="#!">SP Luxe Oil Keratin Restore Mask</a>
                                            <div class="fixCartqty">
                                               <span>Qty: </span>
                                                <div class="cartQtybx">
                                                    <button class="Qtybtn"><i class="bi bi-dash-lg"></i></button>
                                                    <input type="text" value="1">
                                                    <button class="Qtybtn"><i class="bi bi-plus-lg"></i></button> 
                                                </div>
                                            </div>
                                            <span class="fixCartprice">₹1663</span>
                                            <button class="fixCartDelete"><i class="bi bi-trash"></i></button>
                                        </div>
                                    </div>
                                    <div class="fixCartproductscard">
                                        <div class="fixCartimgcol">
                                            <div class="fixCartimg">
                                                <img src="assets/images/product.avif" alt="">
                                            </div>
                                        </div>
                                        <div class="fixCartinfo">
                                            <a href="#!">SP Luxe Oil Keratin Restore Mask</a>
                                            <div class="fixCartqty">
                                               <span>Qty: </span>
                                                <div class="cartQtybx">
                                                    <button class="Qtybtn"><i class="bi bi-dash-lg"></i></button>
                                                    <input type="text" value="1">
                                                    <button class="Qtybtn"><i class="bi bi-plus-lg"></i></button> 
                                                </div>
                                            </div>
                                            <span class="fixCartprice">₹1663</span>
                                            <button class="fixCartDelete"><i class="bi bi-trash"></i></button>
                                        </div>
                                    </div>
                                    <div class="fixCartproductscard">
                                        <div class="fixCartimgcol">
                                            <div class="fixCartimg">
                                                <img src="assets/images/product.avif" alt="">
                                            </div>
                                        </div>
                                        <div class="fixCartinfo">
                                            <a href="#!">SP Luxe Oil Keratin Restore Mask</a>
                                            <div class="fixCartqty">
                                               <span>Qty: </span>
                                                <div class="cartQtybx">
                                                    <button class="Qtybtn"><i class="bi bi-dash-lg"></i></button>
                                                    <input type="text" value="1">
                                                    <button class="Qtybtn"><i class="bi bi-plus-lg"></i></button> 
                                                </div>
                                            </div>
                                            <span class="fixCartprice">₹1663</span>
                                            <button class="fixCartDelete"><i class="bi bi-trash"></i></button>
                                        </div>
                                    </div>
                                    <div class="fixCartproductscard">
                                        <div class="fixCartimgcol">
                                            <div class="fixCartimg">
                                                <img src="assets/images/product.avif" alt="">
                                            </div>
                                        </div>
                                        <div class="fixCartinfo">
                                            <a href="#!">SP Luxe Oil Keratin Restore Mask</a>
                                            <div class="fixCartqty">
                                               <span>Qty: </span>
                                                <div class="cartQtybx">
                                                    <button class="Qtybtn"><i class="bi bi-dash-lg"></i></button>
                                                    <input type="text" value="1">
                                                    <button class="Qtybtn"><i class="bi bi-plus-lg"></i></button> 
                                                </div>
                                            </div>
                                            <span class="fixCartprice">₹1663</span>
                                            <button class="fixCartDelete"><i class="bi bi-trash"></i></button>
                                        </div>
                                    </div>
                                    <div class="fixCartproductscard">
                                        <div class="fixCartimgcol">
                                            <div class="fixCartimg">
                                                <img src="assets/images/product.avif" alt="">
                                            </div>
                                        </div>
                                        <div class="fixCartinfo">
                                            <a href="#!">SP Luxe Oil Keratin Restore Mask</a>
                                            <div class="fixCartqty">
                                               <span>Qty: </span>
                                                <div class="cartQtybx">
                                                    <button class="Qtybtn"><i class="bi bi-dash-lg"></i></button>
                                                    <input type="text" value="1">
                                                    <button class="Qtybtn"><i class="bi bi-plus-lg"></i></button> 
                                                </div>
                                            </div>
                                            <span class="fixCartprice">₹1663</span>
                                            <button class="fixCartDelete"><i class="bi bi-trash"></i></button>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                            
                            <div class="fixCartButton">
                                <div class="fxCartCoupanmain">
                                    <div class="fxCartCoupaninner">
                                        <!-- <input type="checkbox" name="coupanApply" id="coupanApply" class="d-none"> -->
                                        <label for="coupanApply" class="ApplycoupanBtn"><i class="bi bi-percent"></i> Apply Coupan</label>
                                    </div>
                                </div>
                                <div class="fxCartCalcmain">
                                    <div class="fxCartCalcinner">
                                        <h3>Price Details</h3>
                                        <p>
                                            <span>Bag MRP (3 items)</span>
                                            <span>₹3060</span>
                                        </p>
                                        <p>
                                            <span>Bag Discount</span>
                                            <span>₹349</span>
                                        </p>
                                        <p>
                                            <span>Shipping</span>
                                            <span>Free</span>
                                        </p>
                                    </div>
                                </div>
                                
                                <div class="fxproductcalc">
                                    <h3>Subtotal</h3>
                                    <span>₹2000</span>
                                </div>
                                <!-- <a href="#!" class="cartView">VIEW CART</a> -->
                                <a href="cart.html" class="cartProceed">CHECKOUT</a>
                            </div>
                        </div>

                        <!-- Apply Coupan Box -->
                            <div class="applyCoupanMain">
                                <div class="applyCoupanInner">
                                    <div class="fixCartHead">
                                        <h2>Apply Coupan</h2>
                                        <a class="fxCloseapplycoupan pointer text-decoration-none text-dark"><i class="bi bi-x-lg"></i></a>
                                    </div>
                                    <div class="fxCartCoupanmain">
                                        <div class="fxCartCoupaninner">
                                            <div class="coupanBox">
                                                <div class="position-relative">
                                                    <input type="text" placeholder="Apply Coupan" class="form-control">
                                                <button class="btn coupanApplyBtn">Apply</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="coupanListMain">
                                        <div class="noCoupanFound">
                                            <div class="noCoupanFoundinner">
                                                <img src="assets/images/promo-code.png" alt="">
                                                <p>You seem to have no Coupons. Please try again after some time.</p>
                                            </div>
                                        </div>
                                        <div class="coupanListinner">
                                            <div class="coupanListCard">
                                                <div class="coupanicon">
                                                    <i class="bi bi-percent"></i>
                                                </div>
                                                <div class="couapnDetails">
                                                    <h3>COUPANCODE</h3>
                                                    <P>Lorem ipsum dolor sit amet consectetur.</P>
                                                </div>
                                            </div>
                                            <div class="coupanListCard">
                                                <div class="coupanicon">
                                                    <i class="bi bi-percent"></i>
                                                </div>
                                                <div class="couapnDetails">
                                                    <h3>COUPANCODE</h3>
                                                    <P>Lorem ipsum dolor sit amet consectetur.</P>
                                                </div>
                                            </div>
                                            <div class="coupanListCard">
                                                <div class="coupanicon">
                                                    <i class="bi bi-percent"></i>
                                                </div>
                                                <div class="couapnDetails">
                                                    <h3>COUPANCODE</h3>
                                                    <P>Lorem ipsum dolor sit amet consectetur.</P>
                                                </div>
                                            </div>
                                            <div class="coupanListCard">
                                                <div class="coupanicon">
                                                    <i class="bi bi-percent"></i>
                                                </div>
                                                <div class="couapnDetails">
                                                    <h3>COUPANCODE</h3>
                                                    <P>Lorem ipsum dolor sit amet consectetur.</P>
                                                </div>
                                            </div>
                                            <div class="coupanListCard">
                                                <div class="coupanicon">
                                                    <i class="bi bi-percent"></i>
                                                </div>
                                                <div class="couapnDetails">
                                                    <h3>COUPANCODE</h3>
                                                    <P>Lorem ipsum dolor sit amet consectetur.</P>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="fixCartButton">                                        
                                        <!-- <a href="#!" class="cartView">VIEW CART</a> -->
                                        <button type="button" class="cartProceed fxCloseapplycoupan">PROCEED</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
  
  <!-- Address Modal -->
  <div class="modal fade" id="exampleaddModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body">
            <div class="modalAddressmain">
                <div class="modalAddressinner p-3 position-relative">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="bi bi-x-lg"></i>
                      </button>
                    <form>
                        <div class="row px-1">
                            <div class="col-lg-12 px-2 mb-2">
                                <div class="formBox">
                                    <label>Select Country</label>
                                    <select class="form-control">
                                        <option>India</option>
                                        <option>Nepal</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12 px-2 mb-2">
                                <div class="formBox">
                                    <label>Name</label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="col-lg-12 px-2 mb-2">
                                <div class="formBox">
                                    <label>Mobile No.</label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="col-lg-12 px-2 mb-2">
                                <div class="formBox">
                                    <label>Postal Code</label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="col-lg-12 px-2 mb-2">
                                <div class="formBox">
                                    <label>Address</label>
                                    <textarea class="form-control" rows="4"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 px-2 mb-2">
                                <div class="formBox">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Use this as my default Shipping Address</label>
                                      </div>
                                </div>
                            </div>
                            <div class="col-lg-12 px-2 ">
                                <div class="formBox mb-0">
                                    <button class="btn orderplacedbtn w-100">Add Address</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Profile Modal -->
  <div class="modal fade" id="exampleprofileModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body">
            <div class="modalAddressmain">
                <div class="modalAddressinner p-3 position-relative">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="bi bi-x-lg"></i>
                      </button>
                    <form>
                        <div class="row px-1">
                            <div class="col-lg-12 px-2">
                                <div class="modalProfileimg">
                                    <img src="assets/images/abt.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-12 px-2 mb-2">
                                <div class="formBox">
                                    <label>Name</label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="col-lg-12 px-2 mb-2">
                                <div class="formBox">
                                    <label>Mobile No.</label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="col-lg-12 px-2 mb-2">
                                <div class="formBox">
                                    <label>Email Id.</label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="col-lg-12 px-2 mb-2">
                                <div class="formBox">
                                    <label>DOB</label>
                                    <input type="date" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="col-lg-12 px-2 mb-2">
                                <div class="formBox">
                                    <label>Gender</label>
                                    <!-- <input type="date" class="form-control" placeholder=""> -->
                                    <div class="genderBox">
                                        <div class="row px-1">
                                            <div class="col-lg-3 col-sm-6 px-2">
                                                <input type="radio" id="Gmale" class="d-none" name="gender">
                                                <label for="Gmale"><i class="bi bi-gender-male"></i> Male</label>
                                            </div>
                                            <div class="col-lg-3 col-sm-6 px-2">
                                                <input type="radio" id="Gfemale" class="d-none" name="gender">
                                                <label for="Gfemale"><i class="bi bi-gender-female"></i> Female</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 px-2">
                                <div class="formBox mb-0">
                                    <button class="btn orderplacedbtn w-100">Done</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection