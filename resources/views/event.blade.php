<!DOCTYPE html>

<header></header>

<html>
<link rel="stylesheet" href=css/app.css">

<style>
    body {
        font-family: "Roboto Mono Medium";
    }

    .center {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    .input-form div {
        width: 700px;
        align-content: center;
    }

    .login-button {
        align-self: center;
        color: white;
        background: lightseagreen;
        border: none;
        height: 30px;
        width: 100%;
        border-radius: 20px;
        font-size: 12pt;
        cursor: auto;
    }

</style>

<body>
<h1>Events</h1>
<br>
<div class="center">
    <form method="post" action='?'>
        <div class="input-form">
            @csrf
            <div>
                <label>Email</label>
                <input type="email" id="email_address" name="email_address" value="">
            </div>

            <div>
                <label>First Name</label>
                <input type="text" id="first_name" name="first_name" value="">
            </div>

            <div>
                <label>Last Name</label>
                <input type="text" id="last_name" name="last_name" value="">
            </div>

            <div>
                <input type="radio" id="answer" name="answer" value="Yes">
                <label>Ja, ich nehme teil.</label>
                <input type="radio" id="answer" name="answer" value="No">
                <label>Nein, ich komme nicht.</label>
            </div>


            <div>
                <button type="submit" class="login-button">Login</button>
            </div>

            <div>
                <a href="/event/applications" >View Applications</a>
            </div>
        </div>
    </form>
</div>
</body>
</html>


<form action=""></form>
