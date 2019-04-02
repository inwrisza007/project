<style>
body{
    margin:0;
    padding: 0;
    background-image:url(https://www.img.in.th/images/14ef453be8a2cc666a4c51590d9c6468.png);
    background-color:rgba(0,0,0,0.8);
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    font-family: sans-serif;
}
.header{
    background-image:url(https://www.img.in.th/images/402d6effa35c08e97a6f9a7f9c85feff.png);
    background-position: center;
    height: 70px;
    background-size: cover;
    background-repeat: no-repeat;

    top:100%;
    opacity: 0.9;
    width: none;
}
.loginbox{
    width: 320px;
    height: 350px;
    background-color:#FFD662;
    opacity: 0.5;
    top:50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 30px;
    border-radius: 5px;
    
}



h1{
    margin: 0;
    padding: 0 0 20px;
    font-size: 22px;
    text-align: center;
    color: #000000;
    font-style: italic;
    
}
.loginbox p{

    color:#000000;
    margin:0;
    padding: 0;
    font-weight: bold;
    font-style: italic;

}

.loginbox input{
    background-color:#000000;
    color:#FFD662;
    width: 100%;
    margin-bottom: 20px;
    border-color: darkgray;
    height: 30px;

}
.loginbox output[type='email'], input[type='password']{
    width: 100%;
    height: 30px;
    margin-bottom: 20px;
    border-color: darkgray;
    background: #000000;
    outline: none;
    color:#FFD662;
    font-size: 16px;
}
.loginbox input[type='email']:hover,input[type='password']:hover{
    border-bottom: 1px solid darkgray;
}
.loginbox input[type='submit']{
    border: none;
    outline: none;
    height: 40px;
    background-color:black;
    color:#FFD662 ;
    font-size: 18px;
    border-radius: 20px;
}
.loginbox input[type='submit']:hover{
    cursor: pointer;
    background-color: rgba(0,0,0,0.5);
}
.loginbox a{
    text-decoration: none;
    font-size: 12px;
    line-height: 20px;
}
.loginbox a:hover{
    color: #FFD662
}
::placeholder{
    color: #FFD662;
}
</style>