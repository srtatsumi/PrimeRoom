@extends('common.master')
@section('content')

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
@endsection