<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ</title>   
    <link rel = "stylesheet" href = "..//css/FAQ.css">
    <link rel="stylesheet" href="..//css/common-styles.css">
</head>
<body>

    <!--Header-->
    <?php
            include('..//includes/header.php');
        ?>
<!--header end-->   


    <div class = "title">
        <h1>FAQ</h1>
    </div>
   <section>
       <div class = "container">
           <div class = "accordion">
               <div class = "accordion-item" id = "question-1">
                   <a class = "accordion-link" href = "#question-1">
                       What if I forget password ?
                       

                   </a>
                   <div class = "answer">
                    <p>You are able to find as "Forgot my password" in the log-in page of the portal. 
                        Simply you can access the more instructions by clicking it. 
                        If you face any issue contact the administrator of the medical portal via email to more infromation. </p>
                       
               </div>
           </div>

           <div class = "accordion-item" id = "question-2">
            <a class = "accordion-link" href = "#question-2">
                Is my information on the medical portal secure ?
                

            </a>
            <div class = "answer">
             <p>All the databases are stored as electronically with
                more secure under the control of special a staff consisting of senior administrators. </p>
                
        </div>
    </div>

    <div class = "accordion-item" id = "question-3">
        <a class = "accordion-link" href = "#question-3">
           How do I get my medical report ?
            
        </a>
        <div class = "answer">
         <p>Our staff are there during 24 hours on all days to send your medical report to you via email.
             
         </p>
            
    </div>
</div>

<div class = "accordion-item" id = "question-4">
    <a class = "accordion-link" href = "#question-4">
        How can I pay my bill online ?
       

    </a>
    <div class = "answer">
     <p>Visit payment portal of our website. 
        Enter your data and click on "Pay Now".
        If you face any issue contact the administrator of the medical portal via email to more infromation. 
         </p>
        
</div>
</div>
       </div>
   </section>
<!--footer-->
        <?php
            include('..//includes/footer.php');
        ?>
<!--footer end-->


</body>
</html>