
<style>

.icon1{
position: absolute;
width: 50px;
height: 50px;
border-radius: 50%;
top: 6px;
right:100px;

}
.icon2{
position: absolute;
width: 50px;
height: 50px;
border-radius: 50%;
top: 6px;
right:40px;
}
/* cards */
.cards{
     margin-bottom: 20px;
     margin-top: 200px;
}
/* end */
/*********************************************************/
.pos_skincare{
    position: absolute;
    top: 140px;
    left :100px;
 }
 .pos_cosmetics{
    position: absolute;
    top: 90px;
    left :100px;
 }
 .pos_haircare{
   position: absolute;
    top: 90px;
    left :100px;
 }
 .pos_medicine{
    position: absolute;
    top: 90px;
    left :100px;
 }
 /***********************************************/
 /*footer css*/
.navbar_backgroundColor{
     background-color: rgba(104, 202, 109, 0.397);
 }
 .icon3{

     position: absolute;
     width: 50px;
     height: 50px;
     border-radius: 50%;
     top: 6px;
     right: 150px;
     padding: 4px;
}

 .img2{
     padding-left: 20px;
 margin-left: 150px;
     width:30%;
     height: fit-content;
 }

 .text1{
     margin-left:150px ;

     padding: 15px;
   width:20%;
   font-size: 10;
     text-align: flex-start;
     display: flex;
      justify-content: center;
      flex-direction: column;
 }

 .text{
     width:30%;
     text-align:left;
     padding-left: 15px;
     padding-top: 10px;
 }
 .flex{
     display: flex;
     height: 160px;
     flex-direction: row;
     align-items: stretch;
     flex-wrap: nowrap;
      /*border-bottom: 2px solid rgba(43, 42, 42, 0.171);*/
 }
 .bt{
     position: absolute;
     color:rgb(90, 87, 87);
     background-color: rgb(243, 242, 217);
     right: 12%;
     top:60px;
     width: 100px;
     height: 50px;
     border-bottom-left-radius:10px;
     border-bottom-right-radius: 10px;
     border-top-left-radius: 10px ;
     border-top-right-radius: 10px;
     border-color: rgb(209, 191, 191) ;
}
 button:hover{
     background-color: rgba(136, 133, 133, 0.473);
 }
 .endSection{
    /* display: inline-block;*/
 width: 100%;
 background-color: rgba(104, 202, 109, 0.397);
 height: 160px;
 /*margin-block-start: 60px;*/
 position:absolute ;
 bottom: 0;
 color:rgb(9, 12, 12);
 border-top-left-radius:20px ;
 border-top-right-radius: 20px;
 }
 #matajer{
    position: absolute;
    left: 40px;
}
.cardsPos{
    position: relative;
}
#footer {
    position: relative;
    top: 10em;
    /* position: absolute; */
    bottom: 0;
    width: 100%;
}
.cards-wrapper{
    display: flex;
}
.card{
    margin: 0.5em;
    margin-top: 40px;
    width: calc(100%/3);
}
.posAboveCards{
    margin-top: 40px;
    margin-left: 20px;
    background-color: rgba(226, 218, 207, 0.247);
    width: 100%;
}
 body{
    height: 100%;
    background: -webkit-linear-gradient(left, rgb(192, 190, 190), #77917a8e);
}
 /* el hagat el etzawedet 3ashan el foooter (end)*/
/* ------------------------------------------------- */
 /* products */
 .productPicDiv{
    height: 400px;
    width:475px;
    /* border-style: solid;
    border-color: rgb(214, 203, 203); */
    margin-left: 300px;
    margin-top: 90px;
    margin-right: 20px;
    display:inline-block;
 }
 .productImg{
    height:100%;
    width:450;
    padding-top: 10px;
 }
 .productInfo{
    display: inline-block;
    width: fit-content;
    margin-left: 100px;
    height: 450px;
    width:475px;
    margin-top: 50px;
    flex: auto;
    max-width: 600px;
 }
 #wishlistDIV{
    background-color: #4011dc;/*  cac7c7 */
    border-radius: 2em;
    box-shadow: 0 0.5em 1em rgba(0,0,0,.1);
    display: inline-block;
    width:2em;
    height:35px;
    text-align:center;
    line-height:6em;
}
#wishlist{
    font-size: 2em;
}
#wishlist:hover{
    color:red;
}
.addToCart{
    border-radius: 3cm;
    background-color: #e0f3ddf6;
 }
 .addToCart:hover{
    background-color: rgb(241, 164, 241);
 }
 .reviewsForm{
    display: inline-block;
 }
 .reviewsComments{
    display: inline-block;
    margin-left:650px;
    margin-right: 250px;
 }
 .heading{
    display:table;
    width: 66%;
    text-align: center;
    margin-right: auto;
    margin-left: auto;
    align-items: center;
    margin-top: 100px;
    margin-bottom: 30px;
 }
 .head{
    text-shadow:3px 1px rgb(172, 252, 185);
    overflow: hidden;
    text-align: center;
 }
 .head:before,
 .head:after {
  background-color: #000;
  content: "";
  display: inline-block;
  height: 1px;
  position: relative;
  vertical-align: middle;
  width: 50%;
}
.head:before {
    right: 0.5em;
    margin-left: -50%;
  }
.head:after {
    left: 0.5em;
    margin-right: -50%;
}
/* end */
/* ---------------------------------------------------------------------- */
     /*-------account------------*/
body{
    height: 100%;
    background-color: white;
}
.emp-profile{
    padding: 3%;
    margin-top: 3%;
    margin-bottom: 3%;
    border-radius: 0.5rem;
    background: #fff;
}
.profile-img{
    text-align: center;
}
.profile-img img{
    width: 70%;
    height: 100%;
}
.profile-img .file {
    position: relative;
    overflow: hidden;
    margin-top: -10%;
    width: 70%;
    border: none;
    border-radius: 0;
    font-size: 15px;
    background: #212529b8;
}
.profile-img .file input {
    position: absolute;
    opacity: 0;
    right: 0;
    top: 0;
}
.profile-head h5{
    font-size: 30px;
    font-style: oblique;
    color: rgb(49, 126, 130);
}
.profile-head h6{
    font-size: 20px;
    font-style: oblique;
    color: rgb(49, 126, 130);
}
.profile-head p{
    font: size 20px;
    font-style: oblique;
    color: rgb(98, 157, 161);
}
.profile-edit-btn{
    border: none;
    border-radius: 1.5rem;
    width: 70%;
    padding: 2%;
    font-weight: 600;
    color: #414d58;
    cursor: pointer;
}
.profile-head .nav-tabs{
    margin-bottom:5%;
}
.profile-head .nav-tabs .nav-link.active{
    font-size: 20px;
    color: black;
    font-style: oblique;
    border: none;
    border-bottom:2px solid rgb(49, 126, 130);
}
.profile-work{
    padding: 14%;
    margin-top: -15%;
}
.profile-work p{
    font-style: oblique;
    font-size: 20px;
    color: rgb(74, 131, 124);
    font-weight: 600;
    margin-top: 10%;
}
.profile-work a{
    text-decoration: none;
    color:rgb(33, 156, 109);
    font-weight: 600;
    font-size: 14px;
}
.profile-work ul{
    list-style: none;
}
.profile-tab label{
    font-weight: 600;
}
.profile-tab p{
    font-weight: 600;
    color: #1a8b8b;
}
.buttonn{

    font-style: oblique;
    background-color:transparent;
    font-size: 150% ;
    border: none;
    color: rgb(33, 156, 109) ;
}
.col-md-6{
    padding:0.5%;
}
/**********cart***********/
@import url(http://fonts.googleapis.com/css?family=Calibri:400,300,700);
body{
    height: 100%;
    background-color: #eee;
    font-family: 'Calibri', sans-serif !important;
}
.mt-100{
   margin-top:100px;
}
.Cartt {
    margin-bottom: 30px;
    border: 0;
    -webkit-transition: all .3s ease;
    transition: all .3s ease;
    letter-spacing: .5px;
    border-radius: 8px;
    -webkit-box-shadow: 1px 5px 24px 0 rgba(68,102,242,.05);
    box-shadow: 1px 5px 24px 0 rgba(68,102,242,.05);
}
.Cartt .Head-Cart {
    background-color: #fff;
    border-bottom: none;
    padding: 24px;
    border-bottom: 1px solid #295b78;
    border-top-left-radius: 8px;
    border-top-right-radius: 8px;
}
.Head-Cart:first-child {
    border-radius: calc(.25rem - 2px) calc(.25rem - 2px) ;
}
.Cartt .Body-Cart {
    padding: 30px;
    background-color: transparent;
}
.btn-primary, .btn-primary.disabled, .btn-primary:disabled {
    background-color: #1b485b!important;
    border-color: #c3c5cb!important;
}

  /* =========================================== */
  /* SIGNin */
  body{background: #000}
.card{border: none;height: 320px}
.forms-inputs{position: relative}
.forms-inputs span{position: absolute;
    top:-18px;
    left: 10px;
    background-color: #fff;
    padding: 5px 10px;font-size: 15px}
    .forms-inputs input{height: 50px;border: 2px solid #eee}
    .forms-inputs input:focus{box-shadow: none;outline: none;border: 2px solid #000}
    .btn{height: 50px}
    .success-data{display: flex;flex-direction: column}
    .bxs-badge-check{font-size: 90px}
    #matajer{
        position: absolute;
        left: 40px;
    }
   .inputTxt{
        width: 400px;
    }
    #footer {
        position: relative;
        top: 200px;
        width: 100%;

    }
    body{
        background: -webkit-linear-gradient(left, rgb(192, 190, 190), #385e3d8e);
    }

/* =========================================== */
  /* WL stylesheet */

  @import url(http://fonts.googleapis.com/css?family=Calibri:400,300,700);

  body {
      background-color: #eee;
      font-family: 'Calibri', sans-serif !important;
  }

  .mt-100{
     margin-top:100px;

  }


  .card {
      margin-bottom: 30px;
      border: 0;
      -webkit-transition: all .3s ease;
      transition: all .3s ease;
      letter-spacing: .5px;
      border-radius: 8px;
      -webkit-box-shadow: 1px 5px 24px 0 rgba(68,102,242,.05);
      box-shadow: 1px 5px 24px 0 rgba(68,102,242,.05);
  }

  .card .card-header {
      background-color: #fff;
      border-bottom: none;
      padding: 24px;
      border-bottom: 1px solid #295b78;
      border-top-left-radius: 8px;
      border-top-right-radius: 8px;
  }

  .card-header:first-child {
      border-radius: calc(.25rem - 1px) calc(.25rem - 1px) 0 0;
  }



  .card .card-body {
      padding: 30px;
      background-color: transparent;
  }

  .btn-primary, .btn-primary.disabled, .btn-primary:disabled {
      background-color: #1b485b!important;
      border-color: #c3c5cb!important;
  }

  /* =========================================== */
  /* mystylesheet */
  .divabout{
    background-color: rgb(223, 223, 223);
    margin-left: 300px;
    width: 700px;
    align-items: center;
    border-style:outset ; border-color: rgb(59, 56, 56);
    margin-top: 100px;
    margin-bottom: 100px;
    box-shadow: 10px 10px;

}
.pos-aboutus{
    position: absolute;
    top: 140px;
    right:100px;

}

.pos-ourteam{
    position: absolute;
    bottom:  50px;
    left :100px;

}
 /* =========================================== */

    </style>



