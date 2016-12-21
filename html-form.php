
<?php
    $pageTitle = "Homepage"; 
    include "inc/top-part.inc";
?>

 <?php
    include "inc/nav.inc"; ?>  

<div id="formpage">
<h1>Contact form</h1>

<div class="container">
   <div id="content-3" class="content">

<form method="post" action="database-write.php" name="myForm" onsubmit="return(validate());">
       <table cellspacing="2" cellpadding="2" border="1">
            
            <tr>
               <td align="right">First Name</td>
               <td><input type="text" name="firstname" id="first_name" /></td>
            </tr>

            <tr>
               <td align="right">Last Name</td>
               <td><input type="text" name="lastname" id="last_name" /></td>
            </tr>
            
            <tr>
               <td align="right">EMail</td>
               <td><input type="text" name="email" id="email" /></td>
            </tr>
            
            <tr>
               <td align="right">Phone Number</td>
               <td><input type="tel" name="phone" id="phone" /></td>
            </tr>

            <tr>
               <td align="right">Message</td>
               <td><input type="text" name="message" id="message" /></td>
            </tr>

            <tr>
               <td align="right"></td>
               <td><input type="submit" value="Submit" /></td>
            </tr>

        </table>

	<script type="text/javascript">
         function validate()
      {
      
         if( document.myForm.firstname.value == "" )
         {
            alert( "Please provide your First name!" );
            document.myForm.firstname.focus() ;
            return false;
         }
         if( document.myForm.lastname.value == "" )
         {
            alert( "Please provide your Last name!" );
            document.myForm.lastname.focus() ;
            return false;
         }
         
         if( document.myForm.email.value == "" )
         {
            alert( "Please provide your Email!" );
            document.myForm.email.focus() ;
            return false;
         }
         
         if( document.myForm.phone.value == "" ||
         isNaN( document.myForm.phone.value ) ||
         document.myForm.phone.value.length != 10 )
         {
            alert( "Please provide a phone number in the format ###-###-####." );
            document.myForm.phone.focus() ;
            return false;
         }
         
         return( validateEmail());
      }
      
      function validateEmail()
      {
         var emailID = document.myForm.email.value;
         atpos = emailID.indexOf("@");
         dotpos = emailID.lastIndexOf(".");
         
         if (atpos < 1 || ( dotpos - atpos < 2 )) 
         {
            alert("Please enter correct email ID")
            document.myForm.email.focus() ;
            return false;
         }
         return( true );
      }
      </script>
   </div>

   </form>

</div>
</div>
<?php include "inc/footer.inc"; ?>
</body>
</html>