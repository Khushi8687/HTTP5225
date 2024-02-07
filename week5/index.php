<DOCTYPE html>
    <html>

    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="display-5 mt-3 mb-5">
                        student catalog
                    </h1>

                </div>
            </div>
            <?php

            $connect = mysqli_connect('localhost', 'root', '', 'HTTP5225');
            $query = 'SELECT * FROM students';

            $students = mysqli_query($connect, $query);


            if (mysqli_connect_error()){
                die("connection failed");
            }

            // echo '<pre>';
            // echo print_r($students);
            // echo '<pre>';
            ?>

            <div class="row">
                <?php
                foreach($students as $student){

                    if($student['marks'] < 50){
                        $bgClass = 'bg-danger';
                    } else{
                        $bgClass = 'bg-success';
                    }
                    echo ' <div class="col-md-4">
                    <div class="card ' . $bgClass . '">
                        <img src="'. $student['imageURL'] . '" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">' .$student['Fname'] .' ' .$student['Lname'] .'</h5>
                            <p class="card-text">'.$student['marks'] .'</p>
        
                        </div>
                    </div>
            </div>';
                }
                ?>
            </div>
        </div>
    </body>