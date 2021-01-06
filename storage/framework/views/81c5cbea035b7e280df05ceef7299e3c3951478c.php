<?php $__env->startSection('title','Search Employee'); ?>
<?php $__env->startSection('content'); ?>


<body>


  <label>Please Enter the UserName:</label> <input type="text" class="form-controller" id="search" name="search" value="">



        <table border="1" class="table table-striped">

        <thead>

        <tr>

        <th>ID</th>

        <th>Employee Name</th>

        <th>User Name</th>

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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Nafiz\Downloads\newLaravel-main (2)\newLaravel-main\project\project\resources\views/admin/users.blade.php ENDPATH**/ ?>