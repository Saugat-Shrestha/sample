*{
margin: 0;
padding: 0;
box-sizing: border-box;
font-family: sans-serif;
}

body{
height: 100vh;
display: flex;
align-items: center;
justify-content: center;
background-color: #fff;
}
.container{
position: absolute;
max-width: 500px;
width: 100%;
background: #fff;
border-radius: 30px;
box-shadow: 0 0 3px rgba(0, 0, 0, 0.3);
overflow: auto;
margin: 8% auto 0;
}

.container .forms{
display: flex;
align-items: center;

height: 440px;
width: 200%;
transition: height 0.2s ease;
}

.container .form{
width: 50%;
padding: 30px;
background-color: #fff;
transition: margin-left 0.18s ease;
}
.container .signup{
opacity: 0;
transition: opacity 0.09s ease;
}
.container.active .signup{
opacity: 1;
transition: opacity 0.2s ease;
}

.container.active .forms{
height: 600px;
}
.title{
position: relative;
font-size: 30px;
font-weight: 700;

}

.form .title::before{
content: '';
position: absolute;
left: 0;
bottom: 0;
height: 5px;
width: 30px;
border-radius: 25px;
}

.form .input-field{
position: relative;
height: 30px;
width: 120%;
margin-top: 30px;
}

.input-field input{
position: absolute;
height: 100%;
width: 100%;
padding: 0 35px;
border: none;
outline: none;

font-size: 16px;
border-bottom: 2px solid black;
border-top: 2px solid transparent;
transition: all 0.2s ease;
}

.input-field input:is(:focus, :valid){
border-bottom-color: #b91646;
}

.input-field i{
position: absolute;
top: 50%;
transform: translateY(-50%);
color: #999;
font-size: 23px;
transition: all 0.2s ease;
}

.input-field input:is(:focus, :valid) ~ i{
color: #b91646;
}

.input-field i.icon{
left: 0;
}

.input-field i.showHidePw{
right: 0;
cursor: pointer;
padding: 10px;
}

.form .checkbox-text{
display: flex;
align-items: center;
justify-content: space-between;
margin-top: 20px;
}

.checkbox-text .checkbox-content{
display: flex;
align-items: center;
}

.checkbox-content input{
margin: 0 8px -2px 4px;
accent-color: #b91646;
}

.form .text{
color: #333;
font-size: 14px;

}

.form a.text{
color: #b91646;
text-decoration: none;
}
.form a:hover{
text-decoration: underline;
}

.form .button{
margin-top: 35px;
}

.form .button input{
border: none;
color: #fff;
font-size: 17px;
font-weight: 500;
letter-spacing: 1px;
border-radius: 6px;
background-color: #b91646;
cursor: pointer;
transition: all 0.3s ease;
}

.button input:hover{
background-color: #b91646;
}

.form .login-signup{
margin-top: 30px;
text-align: center;
}