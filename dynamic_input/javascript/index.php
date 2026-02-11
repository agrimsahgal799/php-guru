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
                <h3 class="mb-4">Dynamic Input using javascript</h3>
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script>
            const addButton = document.getElementById('addButton');
            const inputContainer = document.getElementById('inputContainer');

            var count = 0;
            addButton.addEventListener('click', () =>{

                const childs = inputContainer.getElementsByClassName('row');
                const inputLength = childs.length;

                if(inputLength > 5){
                    alert("Only 5 more inputs allowed to create");
                    return false;
                }

                count+= 1; 

                const inputRow = document.createElement('div');
                inputRow.classList.add('row');
                inputRow.classList.add('mb-3');

                const input = document.createElement('input');
                input.type = 'text';
                input.name = 'field[]';
                input.classList.add('form-control');
                input.placeholder = 'Username';

                const inputParent = document.createElement('div');
                inputParent.classList.add('col-md-6');
                inputParent.append(input);

                const removeBtn = document.createElement('button');
                removeBtn.type = 'button';
                removeBtn.classList.add('btn');
                removeBtn.classList.add('btn-danger');
                removeBtn.classList.add('btnRemove');
                removeBtn.id = 'btnRemove_'+count;
                removeBtn.textContent = "-";

                const btnParent = document.createElement('div');
                btnParent.classList.add('col-md-6');
                btnParent.classList.add('px-0');
                btnParent.append(removeBtn);
            
                inputRow.append(inputParent);
                inputRow.append(btnParent);

                inputContainer.append(inputRow);

                removeBtn.addEventListener('click', (event)=>{
                    inputRow.remove();
                });

            });
            
        </script>
    
    </body>
</html>