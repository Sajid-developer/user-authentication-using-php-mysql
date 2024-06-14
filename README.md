# User-authentication-using-php-mysql-DB

## PROJECT CODE

```javascript



	  const form_section = document.querySelector(".form_section"),
	        registerForm = document.querySelector("#reg-box"),
	        loginForm = document.querySelector("#login-box");

	  const show = (id)=>{
          if(id === "register"){
			form_section.classList.add("active");
			loginForm.classList.add("hide");
			registerForm.classList.remove("hide");
			console.warn("Register form Opened !");
		  }else{
			form_section.classList.add("active");
			loginForm.classList.remove("hide");
			registerForm.classList.add("hide");
			console.warn("Login form Opened !");
		  }
	  }
      
	  const hide = ()=>{
		    // console.log(clickCount);
			form_section.classList.remove("active");
	  }



```

Php Code

```php

<?php

   session_start();

   if(isset($_SESSION['user_email'])) {
      if((time() - $_SESSION['user-login-time']) > 600){
         header("location:logout.php");
      }else{
          $_SESSION['user-login-time'] = time();
       }
     }

   else{
      header("location:index.php");
      }
     
     echo "<span style='background:deepskyblue;width:100%;padding:20px 10px;display:flex;justify-content:space-around;align-items:center'>";
     echo "<h1>"."Hello ! "."</h1>"."<h2>".$_SESSION['user_email']."</h2>";
     echo "</span>";

 ?>

```
