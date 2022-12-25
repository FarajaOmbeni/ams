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


<form action="/post/{{$form->id}}/edit" method="POST">
    @csrf
    <label for="name">Name</label><br>
    <input type="text" name="name" id="name" placeholder="First name" value="{{$form -> name}}"><br>
    @error('name')
        <p>{{$message}}</p>
    @enderror
    <label for="description">Description</label> <br>
    <input type="text" name="description" id="desc" value="{{$form -> description }}"><br><br>
    <input type="submit" name="" value="UPDATE" id="">
</form>