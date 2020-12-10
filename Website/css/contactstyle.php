<?php
    header('Content-type: text/css');
?>

/*------------Contact---------*/
#contact{
background-image: url(../img/contactus.jpg);
background-size: cover;
background-position: center;
padding-top: 50px;
padding-bottom: 100px;
color: #efefef !important;
background-attachment: fixed;

}


#contact h1{
    text-align: center;
    color: #555!important;
    padding-top:10px;
    padding-bottom: 10px;
}

#contact h1::after{
content: '';
background: #007bff;
display: block;
height: 3px;
width: 170px;
margin: 20px auto 5px;
}

.contact-form{
padding: 15px;
color: #000;
background: white;

}

.form-control{
    border-radius: 0!important;
    border: solid 0.01rem !important;
}

::placeholder{
    color: #999 !important;
}

.follow{
    background: #fff;
    padding: 10px;
    margin: 24px;
}

.form-group span{
    color: red;
}

.form-group h6{
 color: #000;
}

.form-check-inline{
    color: #000;
}



