<!-- VALIDATE FORM DATA-->
@if($errors->any())
    <div style="color:red">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<form action="/postForm" method="POST">
    @csrf
    <label for="name">Name</label><br>
    <input type="text" name="name" id="name" placeholder="First name"><br>
    @error('name')
        <p style="color:red">{{$message}}</p>
    @enderror
    <label for="description">Description</label> <br>
    <input type="text" name="description" id="desc"><br><br>
    @error('description')
        <p style="color:red">{{$message}}</p>
    @enderror
    <input type="submit" name="" value="STORE" id="">
</form>