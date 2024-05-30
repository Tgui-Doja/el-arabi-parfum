<style>
    /* Body */
body {
    font-family: Arial, sans-serif;
    background-color: #f8f9fa;
}

/* Container */
.container {
    max-width: 600px;
    margin: 50px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

/* Heading */
h1 {
    text-align: center;
    color: #333;
}

/* Form Group */
.form-group {
    margin-bottom: 20px;
}

/* Labels */
label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
    color: #555;
}

/* Form Input */
.form-control {
    width: 100%;
    padding: 10px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 5px;
    transition: border-color 0.3s ease;
}

.form-control:focus {
    outline: none;
    border-color: #007bff;
}

/* Buttons */
.btn {
    display: inline-block;
    padding: 10px 20px;
    font-size: 16px;
    text-align: center;
    cursor: pointer;
    color: #fff;
    background-color: #007bff;
    border: none;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.btn:hover {
    background-color: #0056b3;
}

/* Error Messages */
.alert {
    padding: 10px;
    margin-bottom: 20px;
    border-radius: 5px;
}

.alert-danger {
    color: #721c24;
    background-color: #f8d7da;
    border: 1px solid #f5c6cb;
}

.alert-success {
    color: #155724;
    background-color: #d4edda;
    border: 1px solid #c3e6cb;
}

</style>
<div class="container">
    <div class="row">
        <h1>Ajouter user</h1>
        <hr>

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="/ajouter/traitement" method="POST" class="form-group">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="password">password</label>
                <input type="password" class="form-control" id="Password" name="password">
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Ajouter user</button>
            <br><br>
            <a href="/dashboard" class="btn btn-danger">Revenir à la liste des reservations</a>
        </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    </div>
    
</div>
