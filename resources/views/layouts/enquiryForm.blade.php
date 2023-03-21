<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route("enquirymail")}}" method="post">
        @csrf
       <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name">
       </div>
       <div>
            <label for="Phone">Phone Number</label>
            <input type="text" name="phone" id="phone">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
        </div>
        <button type="submit"> Send </button>
    </form>
</body>
</html>