
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
body {font-family: "Times New Roman", Georgia, Serif;}
h1, h2, h3, h4, h5, h6 {
  font-family: "Playfair Display";
  letter-spacing: 5px;
}
</style>
</head>
<body>
    

    <div class="container mt-3"></div>
        <form action="{{ url('Livro') }}" method="POST">
            @csrf
            <input type="text" name="title" placeholder="Title"  required>
            <input type="text" name="author" placeholder="Author"  required>
            <input type="number" name="publication_year" placeholder="Publication Year" required>
            <input type="text" name="gender" placeholder="gender"  required>
            <button type="submit">Update Book</button>
        </form>
    </div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>


