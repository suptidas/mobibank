<!DOCTYPE html>
<html>
<head>
    <title>Search page</title>
</head>   
    <body>
       <a href="<?php echo e(route('manager.index')); ?>">Back</a> |
       <a href="/logout">logout</a>
    <br>
        </div>
        <h3>User Search</h3>
        </div>


        
        <div class="panel-body">

        <div class="form-group">

        <input type="text" class="form-controller" id="search" name="LOWER(search)" value="">


        </div>

        <table border="1">

        <thead>

        <tr>

        <th>ID</th>

        <th>User Name</th>

        <th>Name</th>

        <th>Email</th>

        <th>Contact Number</th>

        <th>Gender</th>

        <th>User Type</th>

        <th>Address</th>

        </tr>

        </thead>

        <tbody id='tbody'>

        </tbody>

        </table>

        </div>

        </div>

        </div>

        </div>
    
        
        <script type="text/javascript">
            const search = document.getElementById('search');
            const tableBody = document.getElementById('tbody');
            function getContent(){
            
            const searchValue = search.value;
            
                const xhr = new XMLHttpRequest();
                xhr.open('GET','<?php echo e(route('search')); ?>/?search=' + searchValue ,true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function() {
                    
                    if(xhr.readyState == 4 && xhr.status == 200)
                    {
                        tableBody.innerHTML = xhr.responseText;
                    }
                }
                xhr.send()
            }
            search.addEventListener('input',getContent);
        </script>
         

    </body>
</html><?php /**PATH S:\Fall2020\ATP_3\FINAL\Final Project\Marge\project\resources\views/manager/empSearch.blade.php ENDPATH**/ ?>