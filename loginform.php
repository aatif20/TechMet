<html>
    <head>
        <title></title>
    </head>
    <style>
        *{
        margin:0;
        padding: 0;
        box-size:border-box;
        font-family: 'Josefin Sans',sans-serif;
        }
        .main_div{
            width: 100%;
            height: 100vh;
            position:relative:
        }

        .box{
            width: 400px;
            position:absolute;
            top:50%;
            left:50%;
            transform: translate(-50%, -50%);
            padding:50%;
            background:rgba(0,0,0,0.8);
            border-radius:10px;

        }

        .box h1{
            margin-bottom:30px;
            color:#ffff;
            text-align:center;
            text-transform:capitalize;
        }

        .box .inputBox{
            position:relative;

        }

        .box .inputBox input{
            width:100%;
            padding:10px;
            font-size:16px;
            color:#fff;
            letter-spacing:1px;
            margin-bottom:30px;
            border:none;
            border-bottom:1px solid #fff;
            background:transparent;
            outline:none;
        }

        .box .inputBox label{
            position:absolute;
            top:0;
            left:0;
            letter-spacing:1px;
            padding:10px 0;
            font-size:16px;
            color:#fff;
            transition: 0.5s;
        }
        .box .inputBox input:focus ~ label,
        .box .inputBox input:valid ~ label{
            top:-20px;
            left:0;
            color: #03a9f4;
            font-size:12px;
        }

        .box input[type="submit"]{
            background:transparent;
            border:none;
            outline:none;
            color:$fff;
            background: #03a9f4;
            padding:8px 16px;
            border-radius:5px;
        }
    </style>
    <body>
        <div class = "main_div">
            <div class ="Box">
                <h1>LOGIN FORM</h1>
                <form method="" action="">
                    <div class ="inputBox">
                        <input type="text " name="username">
                        <label>username</label>
                    </div>

                    <div class ="inputbox">
                        <input type=" password " name="password">
                        <label>password</label>
                    </div>
                    <input type="submit" name="" value="login">
                </form>
            </div>
        </div>
    </body>
</html>