<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="wrap w-50 m-auto pt-5">
                <h3 class="mb-4">Dynamic Input using Jquery</h3>
                <form action="javascript:void(0);">
                    <div id="inputContainer">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <input type="text" name="field[]" class="form-control" placeholder="Username">
                            </div>
                            <div class="col-md-6 px-0">
                                <button type="button" class="btn btn-success" id="addButton">+</button>
                            </div>
                        </div>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script>
            var count = 0;
            $('#addButton').on('click', function(){
                var totalInputs = $('#inputContainer').children('.row').length;
                if(totalInputs<=1){
                    count = 1;
                }
                else if(totalInputs > 5){
                    alert('Only 5 more inputs allowed to create');
                    return false;
                }
                else{
                    count++;
                }
                $('#inputContainer').append(
                    `<div class="row mb-3">
                        <div class="col-md-6">
                            <input type="text" name="field[]" class="form-control" placeholder="Username">
                        </div>
                        <div class="col-md-6 px-0">
                            <button type="button" class="btn btn-danger btnRemove" id="btnRemove_${count}">-</button>
                        </div>
                    </div>`
                );
            });

            $(document).on('click', '.btnRemove', function(){
                var thisId = $(this).attr('id');
                $('#'+thisId).closest('.row').remove();
            });
            
        </script>
    
    </body>
</html>