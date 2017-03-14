<!DOCTYPE html>
<html>
<style type="text/css">

        .navigation{
        width: 100%;
        height: 450px;
        background:url("images/book..jpg") no-repeat center;
        -webkit-background-size: cover;
        -moz-background-size:cover;
        -o-background-size:cover;
        background-size:cover;
        padding-top: 80px;
        }

        .design{
        width: 600px;
        height: 200px;
        border:black solid;
        margin-left: 350px;
        margin-top: 40px;
        }

        .design p{
        font-family: Segoe Print;
        font-size: 40pt;
        margin-left: 30px;
        color: black;
        }

       .box{
        width: 800px;
        height:500px;
        margin: 3em auto;
        background-color: rgba(152, 147, 165, 0.49);
       }

       .image{
        margin-left: 80px;
        margin-top: 50px;
        width: 300px;
        height: 400px;
        box-shadow: 0 5px 5px;
        border: 10px solid white;
        float: left;
        margin-right: 50px;
        }  

        .box h3{
        font-family: Lucida Bright;
        color: black;
        padding-top: 60px;
        padding-right: 10px;
        }

        .box p{
            color: blue;
            height: 250px;
            padding-right: 30px;
        }

        .box button{
        margin-left: 100px;
        height: 35px;
        width: 120px;
        background-color: #204354;
        border-color: #9ac0de;
        color: white;
        }

</style>
<head>
    <title>Home</title>
</head>
<body>




<?php $__env->startSection('content'); ?>
<div class="container"></div>
    <div class="navigation">
         <div class="design">
             <p>"The is no friend as loyal as a book"</p>
         </div>
</div>

<div class="box">
            <img src="images/CSharpp.jpg" class="image">    
            <h3>THE C# PROGRAMMING LANGUAGE</h3>
            <p>C# is a modern, general-purpose, object-oriented programming language developed
by Microsoft and approved by European Computer Manufacturers Association (ECMA)
and International Standards Organization (ISO). It was developed by Anders Hejlsberg and his team during the development of .Net
Framework. It is designed for Common Language Infrastructure (CLI), which consists of the
executable code and runtime environment that allows use of various high-level
languages on different computer platforms and architectures.</p>
            <a href="pdf/cSharp.pdf"><button>Keep reading</button></a>
</div>

<div class="box">
            <img src="images/cplus.jpg" class="image">
            <h3>PROGRAMMING IN C++</h3>
            <p>This introduction gives an overview of the major concepts and features of the C++ programming
language and its standard library. It also provides an overview of this book
and explains the approach taken to the description of the language facilities and their
use. In addition, the introductory chapters present some background information about
C++, the design of C++, and the use of C++.</p>
            <a href="pdf/Cplusplus.pdf"><button>Keep reading</button></a>
</div>

<div class="box">
            <img src="images/fortran.jpg" class="image">
            <h3>FORTRAN 77 PROGRAMMING</h3>
            <p>Fortran, as derived from Formula Translating System, is a general-purpose, imperative programming language. It is used for numeric and scientific computing.
Fortran was originally developed by IBM in the 1950s for scientific
engineering applications. Fortran ruled this programming area for a long
and became very popular for high performance computing, because.</p>
            <a href="pdf/fortran_tutorial.pdf"><button>Keep reading</button></a>
</div>

<div class="box">
            <img src="images/html.jpg" class="image">
            <h3>BASIC HTML</h3>
            <p>HTML stands for Hyper Text Markup Language, which is the most widely used language on Web to develop web pages.
            HTML was created by Berners-Lee in late 1991 but "HTML 2.0" was the first standard HTML specification which was published in 1995. HTML 4.01 was a major version of HTML and it was published in late 1999. 
            Though HTML 4.01 version is widely used but currently we are having HTML-5 version which is an extension to HTML 4.01, and this version was published in 2012.</p>
            <a href="pdf/html_tutorial.pdf"><button>Keep reading</button></a>
</div>

<div class="box">
            <img src="images/java.jpg" class="image">
            <h3>JAVA PROGRAMMING</h3>
            <p>Java has swept the computer industry with its promise
            to deliver executable content to the vast sea of computers connected to the World Wide Web. 
            Here's a look at why you'll want to start developing with this language as soon as you can.</p>
            <a href="pdf/java-programming-language-handbook-1.pdf"><button>Keep reading</button></a>
</div>

<div class="box">
            <img src="images/php.gif" class="image">
            <h3>PHP FOR ABSOLUTE BEGINNERS</h3>
            <p>Now, more than ever, the Web is a major vehicle for corporate and personal communications.
            Web sites carry photo albums, shopping carts, and product lists. Many of
            those web sites are driven by PHP, an open source scripting language primarily
            designed for generating HTML content.
            Since its inception in 1994, PHP has swept over the Web. The millions of web sites
            powered by PHP are testament to its popularity and ease of use. It lies in the sweet
            spot between Perl/CGI, Active Server Pages (ASP), and HTML. </p>
            <a href="pdf/programming_PHP.pdf"><button>Keep reading</button></a>
</div>
     
<div class="box">
            <img src="images/python.png" class="image">
            <h3>PYTHON PROGRAMMING</h3>
            <p>Open source general-purpose language. Object Oriented, Procedural, Functional
 Easy to interface with C/ObjC/Java/Fortran. Easy-ish to interface with C++ (via SWIG). Great interactive environment</p>
            <a href="pdf/Python.pdf"><button>Keep reading</button></a>
</div>

<div class="box">
            <img src="images/cobol.jpg" class="image">
            <h3>COBOL</h3>
            <p>COBOL is a high-level language. One must understand the way COBOL works.
Computers only understand machine code, a binary stream of 0s and 1s. COBOL
code must be converted into machine code using a compiler. Run the program
source through a compiler. The compiler first checks for any syntax errors and
then converts it into machine language. The compiler creates an output file
which is known as load module. This output file contains executable code in the
form of 0s and 1s.
</p>
            <a href="pdf/Cobol.pdf"><button>Keep reading</button></a>
</div>

<div class="box">
            <img src="images/visual-basic.png" class="image">
            <h3>visual basic</h3>
            <p>· Visual Basic is a tool that allows you to develop Windows (Graphic User
Interface - GUI) applications. The applications have a familiar appearance to the
user. Visual Basic is event-driven, meaning code remains idle until called upon to
respond to some event (button pressing, menu selection, ...). Visual Basic is
governed by an event processor. Nothing happens until an event is detected.
Once an event is detected, the code corresponding to that event (event
procedure) is executed. Program control is then returned to the event processor.
</p>
            <a href="pdf/visualbasic.pdf"><button>Keep reading</button></a>
</div>


<div class="box">
            <img src="images/ruby.jpg" class="image">
            <h3>THE RUBY PROGRAMMING LANGUAGE</h3>
            <p>Ruby – Scripting language, dynamic and object oriented
Allows rapid development and rapid prototypes of software
Consists of useful string operations and regular expressions
Everything in Ruby is an object
Has automatic garbage collection
Instant feedback when developing
Multiple OS support and open source</p>
            <a href="pdf/ruby.pdf"><button>Keep reading</button></a>
</div>          
<?php $__env->stopSection(); ?>
</body>
</html>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>