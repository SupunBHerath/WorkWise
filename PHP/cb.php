<?php $active5 = "active"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/index.css">

    <title>Document</title>
    <style>
        .div3{
            margin-top: -40px;
            height: max-content;
            transform: scale(.8);
        }
        #cont{
            font-size: 65px;
            font-weight: 900;
            margin-top: 0;
            
        }
        .right_div3 h1 {
            margin-bottom: 0;
            text-align: center;
        
        }
        .right_div3{
            padding: 0 40px;
        }
        input, textarea {
            width: 95%;
            padding: 15px 20px;
            margin: 8px 0;
            border: none;
            background: #f1f1f1;
            font-size: 17px;
            
            border-radius: 5px;
        }
        label{
            font-size: 30px;
            font-weight: 900;
            margin-bottom: 0px;
            

        }
        button{
            background: #0ce053;
            color: #fcf9f9;
            border: none;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 5px;
            width: 100%;
        }
        #ftyw_text2{
            color: #d1d3d1;
            margin-top: 0;
            width: 95%;
            margin-left: 5px;
        }
    </style>
</head>
<body>
<?php include_once('header.php') ?>

<?php include_once('navbar.php') ?>
    <div class="div3">
        <div class="left_div3" style="background-image: url(../Image/Home/c.jpg);"></div>
        <div class="right_div3">
            <br>
          <h1 id="cont">Contact Us </h1>
          <p id="ftyw_text2">Our team happy to answer your questions.Fill out
            the form and we'll be in touch as soon as possible.We value your feedback and inquiries.
            We strive to respond to all messages within 24 hours.</p>
            <form class="container">
                <label for="name"><b>Name</b></label><br>
                <input type="text" placeholder="Enter name" name="name" required><br><br>
                <label for="email"><b>Email</b></label><br>
                <input type="text" placeholder="Enter email" name="email" required><br><br>
                <label for="message"><b>Message</b></label><br>
                <textarea name="" id="" cols="30" rows="4" required></textarea>
            <br>
             <button disabled >Submit</button>
             <br><br>
        </div>
    </div>
    <?php include_once('footer.php') ?>
