<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    
    body{
        font-family: sans-serif
    }

    header {
        background-color: black;
        width: 100%;
        height: 100px;
        color: white;
        display: flex;
        align-items: center;
        justify-content: center
    }

    ul{
        list-style: none;
        display: flex;
        
    }

    li{
        margin-right: 30px;
        font-size: 26px; 
        cursor: pointer;
    }
</style>

<body>
    <header>
        <ul>
            <li><a href="/service">Service</a></li>
            <li><a href="/history">History</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/login">Login</a></li>
        </ul>
    </header>
    <main>
        <span>Hello World!</span>
        <span>{{ $question }}</span>
    </main>

</body>

</html>
