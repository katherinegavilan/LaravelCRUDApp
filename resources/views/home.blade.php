<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Livewire Crud Example - TechvBlogs</title>    
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        @include('livewire.nav')

    </nav>
    <div class="container">
        <div class="row justify-content-center mt-3">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">
                        <h2>Livewire Crud Example - TechvBlogs</h2>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-3">
            @livewire('category')
        </div>
    </div>
    @livewireScripts
</body>

</html>
