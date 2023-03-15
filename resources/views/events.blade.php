<!DOCTYPE html>

<header><h1>Events</h1></header>

<body>

<form method="post" action='?'>
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
            <label>Remarks</label>
            <input type="text" id="remarks" name="remarks" value="">
        </div>

        
        <button type="submit">Login</button>
    <form>

</body>