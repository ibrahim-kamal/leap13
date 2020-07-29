<html>
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">artist</th>
                <th scope="col">download</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
            </table>
        </div>
        <!-- <script src="./jquery-3.5.1.min.js"></script> -->
        <script>
            fetch('https://api.jsonbin.io/b/5eafd4ca47a2266b1472794c')
            .then(response => {
                if (response.ok) {
                return Promise.resolve(response);
                }
                else {
                return Promise.reject(new Error('Failed to load')); 
                }
            })
            .then(response => response.json()) // parse response as JSON
            .then(tracks => {
                console.log(tracks);
                tracks.tracks.forEach((track,i) => {
                    const { name , artist , url } = track; 
                    let row = 
                    `<tr>
                        <th scope="col">${i+1}</th>
                        <th scope="col">${name}</th>
                        <th scope="col">${artist}</th>
                        <th scope="col">
                            <a href = "<?php echo base_url()."tracks/download/"?>${url}"><button type="button" class="btn btn-primary">download</button></a>
                        </th>
                    </tr>` ;
                    $('tbody').append(row);
                });
            })
            .catch(function(error) {
                console.log(`Error: ${error.message}`);
            });
        </script>
    </body>
</html>