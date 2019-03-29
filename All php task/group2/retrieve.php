<html>  
    <head>  
        <title>Update Multiple Mysql Data using Checkbox in PHP</title>
  <script src="jquery/jquery.min.js"></script>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />  
        <script src="bootstrap/js/bootstrap.min.js"></script>  
          
    </head>  
    <body>  
        <div class="container">  
            <br />
   <div class="table-responsive">  
    <h3 align="center">Update Multiple Mysql Data using Checkbox  in PHP</h3><br />
    <form method="post" id="update_form">
                    <div align="left">
                        <input type="submit" name="multiple_update" id="multiple_update" class="btn btn-info" value="Multiple Update" />
                    </div>
                    <br />
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <th width="5%"></th>
                                <th width="20%">UserName</th>
                                <th width="30%">Password</th>
                                <th width="15%">FirstName</th>
                                <th width="20%">LastName</th>
                               
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                </form>
   </div>  
  </div>
    </body>  
</html>  
<script>  
$(document).ready(function(){  
    
    function fetch_data()
    {
        $.ajax({
            url:"select.php",
            method:"POST",
            dataType:"json",
            success:function(data)
            {
                var html = '';
                for(var count = 0; count < data.length; count++)
                {
                    html += '<tr>';
                    html += '<td><input type="checkbox" id="'+data[count].id+'" data-username="'+data[count].username+'" data-password="'+data[count].password+'" data-firstname="'+data[count].firstname+'" data-lastname="'+data[count].lastname+'"  class="check_box"  /></td>';
                    html += '<td>'+data[count].username+'</td>';
                    html += '<td>'+data[count].password+'</td>';
                    html += '<td>'+data[count].firstname+'</td>';
                    html += '<td>'+data[count].lastname+'</td></tr>';
                }
                $('tbody').html(html);
            }
        });
    }

    fetch_data();

    $(document).on('click', '.check_box', function(){
        var html = '';
        if(this.checked)
        {
            html = '<td><input type="checkbox" id="'+$(this).attr('id')+'" data-username="'+$(this).data('username')+'" data-password="'+$(this).data('password')+'" data-firstname="'+$(this).data('firstname')+'" data-lastname="'+$(this).data('lastname')+'"  class="check_box" checked /></td>';
            html += '<td><input type="text" name="username[]" class="form-control" value="'+$(this).data("username")+'" /></td>';
            html += '<td><input type="text" name="password[]" class="form-control" value="'+$(this).data("password")+'" /></td>';
           
            html += '<td><input type="text" name="firstname[]" class="form-control" value="'+$(this).data("firstname")+'" /></td>';
            html += '<td><input type="text" name="lastname[]" class="form-control" value="'+$(this).data("lastname")+'" /><input type="hidden" name="hidden_id[]" value="'+$(this).attr('id')+'" /></td>';
        }
        else
        {
            html = '<td><input type="checkbox" id="'+$(this).attr('id')+'" data-username="'+$(this).data('username')+'" data-password="'+$(this).data('password')+'" data-firstname="'+$(this).data('firstname')+'" data-lastname="'+$(this).data('lastname')+'" class="check_box" /></td>';
            html += '<td>'+$(this).data('username')+'</td>';
            html += '<td>'+$(this).data('password')+'</td>';
            html += '<td>'+$(this).data('firstname')+'</td>';
            html += '<td>'+$(this).data('lastname')+'</td>';
                       
        }
        $(this).closest('tr').html(html);
        $('#gender_'+$(this).attr('id')+'').val($(this).data('gender'));
    });

    $('#update_form').on('submit', function(event){
        event.preventDefault();
        if($('.check_box:checked').length > 0)
        {
            $.ajax({
                url:"multiple_update.php",
                method:"POST",
                data:$(this).serialize(),
                success:function()
                {
                    alert('Data Updated');
                    fetch_data();
                }
            })
        }
    });

});  
</script>