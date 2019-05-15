<!DOCTYPE html>
<html>
    <head>
        <style>
            div {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
                text-align:center;
            }
        </style>
        <title>Book Information</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    </head>
    <body>
        <div>
        <h1>Book Information</h1>

            <form action="{{ route('page.store') }}" method="POST">
                @csrf
                <label>*ISBN:</label>
                <input type="text" name="isbn" required>
                @if($errors->has('isbn'))
                    <h6>{{ $errors->first('isbn') }}</h6>
                @endif
                <br><br>
                <label>*Title:</label>
                <input type="text" name="title" required>
                <br><br>
                <label>*Author:</label>
                <select style="width:30%; margin:auto; text-align:center"name="author_id[]" class="form-control" multiple="multiple" size="{$count}}">
                        @foreach($authors as $author)
                        <option value="{{ $author->id }}">{{ $author->name }}</option>
                        @endforeach
                    </select>
                <br><br>
                <label>Genre:</label>
                <input type="text" name="genre">
                <br><br>
                <label>Publisher:</label>
                <input type="text" name="publisher">
                <br><br>
                <label>*Date Published:</label>
                <input type="text" name="date_pub" required>
                <br><br>
                <label>Price:</label>
                <input type="text" name="price">
                <br><br>
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
                

                
            </form> 
            <br>
            <a href="{{ route('page.index') }}" class="btn btn-danger">Back</a>
            <h4>Fields with " * " are required.</h4>
        </div>
        
    </body>
</html>
