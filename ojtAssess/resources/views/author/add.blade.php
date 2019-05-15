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
        <h1>Add author for {{ $book->title }}</h1>

            <form action="{{ route('assignment.store') }}" method="POST">
                @csrf
                <label>*Author:</label>
                <select style="width:30%; margin:auto; text-align:center"name="author_id[]" class="form-control" multiple="multiple" size="{$count}}">
                        @foreach($authors as $author)
                        <option value="{{ $author->id }}">{{ $author->name }}</option>
                        @endforeach
                    </select>
                <br><br>
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
                <input type="hidden" name="assignment_id" value="{{ $book->assignment_id }}">
                <input type="hidden" name="book_id" value="{{ $book->id }}">

                
            </form> 
            <br>
            <a href="{{ route('page.index') }}" class="btn btn-danger">Back</a>
            <h4>Fields with "*" are required.</h4>
        </div>
        
    </body>
</html>
