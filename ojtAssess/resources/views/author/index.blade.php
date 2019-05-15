<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

a {
    background-color: #f44336;
  color: white;
  padding: 10px 20px;
  text-align: center; 
  text-decoration: none;
  display: inline-block;
}
</style>
<title>OJT Assessment</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
</head>
<body>

<div class="container">
    <h2 style="text-align:center">{{ $title }}</h2>
    <br><br>
    <div>
        <a href="{{ route('assignment.edit', ['book_id' => $book_id]) }}" class="btn btn-primary">Add</a>
        <a href="{{ route('page.index')}}" class="btn btn-danger">Back</a>
    </div>
    <br>
    <div class="table-responsive">
        <table id="table">
        <thead>
            <tr>
                <th>Author Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($assignments as $assignment)
            <tr>
                <td>{{ $assignment->author->name }}</td>
                
                <td>
                    <a href="{{ route('removeAuthor', ['id'=>$assignment->id, 'book_id'=>$book_id]) }}" class="btn btn-danger">Remove</a>
                </td>
            </tr>
            @endforeach
        </tbody>
            
        </table>
    </div>

    <br><br>
    
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
        $(document).ready(function () {
           $('#table').DataTable();
        });
    </script>
</body>
</html>
