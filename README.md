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
